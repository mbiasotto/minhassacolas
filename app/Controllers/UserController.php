<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;
use App\Helpers\Helpers as Helper;

class UserController extends Controller
{    

    const currentPage = 'usuarios';	
    const currentTitle = 'Usuários';

    public function password($request, $response, $params)
    {
   
        $data = [
            'page' => 'password',
            'title' => 'Alterar senha',
            'configs' => $this->configs,
        ];
        

        return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/password.twig', $data);
    }

    public function passwordUpdate($request, $response, $params)
    {

        $item = User::find($_SESSION['user']);

        if(!$item)
        {
            $this->container->get('flash')->addMessage('error','Registro não encontrado');
            return $this->redirect($request, $response, $this->container->router->pathFor('app.'.self::currentPage));
        }

        $params = $request->getParsedBody();

        $validator = $this->container->get('validator')->validate($request, [
            'senha' => v::notEmpty()->noWhitespace()->length(4),
            'senha_confirmar' => v::notEmpty()->noWhitespace()->length(4),
        ]);

        if ($validator->failed()) {

            $errors = $validator->errors();

            $_SESSION['errors'] = $errors;
        
            $this->container->get('flash')->addMessage('error', 'Dados inválidos ou senhas diferentes, tente novamente!');
        
            return $this->redirect($request, $response, 'app.usuarios.password');
        }

        $item->senha = $params['senha'];
        $item->senhamd5 = password_hash($params['senha'], PASSWORD_DEFAULT);
        $item->save();

        $this->container->get('flash')->addMessage('success','Atualização realizada com sucesso');
        return $this->redirect($request, $response, 'app.usuarios.password');

    }


    public function esqueci($request, $response, $params)
    {
        if ($request->getMethod() === 'GET')
        {
            return $this->container->get('view')->render($response, 'admin/esqueci.twig');
        }

        $post = $request->getParsedBody();

        $validator = $this->container->get('validator')->validate($request, [
            'email' => v::notEmpty()->email(),
        ]);

        if ($validator->failed()) {

            $errors = $validator->errors();

            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = $request->getParsedBody();
        
            $this->container->get('flash')->addMessage('error', 'E-mail ou usuário inválido!');
        
            return $this->redirect($request, $response, 'app.login');
        }

        
        $user = $post['email'];

        //verifica se tem registro
        $item = User::where(function ($query) use ($user) {
            $query->where('email', $user)->orWhere('user', $user);
            })
            ->where('status','A')
            ->first();

        if(!$item)
        {
            $this->container->get('flash')->addMessage('error', 'E-mail ou usuário não encontrado!');
            return $this->redirect($request, $response,'app.login');
        }


        $now = new \DateTime( date('m/d/Y H:i:s'));
        $now->modify('+3 hour');
        $key = bin2hex(random_bytes(20));

        $item->senha_key = $key;
        $item->senha_key_data = $now;

        $item->save();

        $payload = [
            'to_name' => $item->nome,
            'to_email' => $item->email,
            'd' => array(
                        'nome'=> $item->nome,
                        'key'=> $key
                        )
        ];
    
        $this->container->get('mail')->send($payload,'resenhaAdmin.twig','Lembrete de senha');


        $this->container->get('flash')->addMessage('success','Enviamos um link para você criar uma nova senha para o e-mail: '.$this->hideEmail($item->email));
        return $this->redirect($request, $response,'app.login');
    }

    public function senhaNova($request, $response, $params)
    {
        
        $getParams = $request->getQueryParams();
        $params = $request->getParsedBody();
        $key =  $getParams['key'];

        $item = User::where('senha_key', $key)->first();

        if (!$item && $key != '') {
            $this->container->get('flash')->addMessage('error', 'Link expirado, tente novamente!');
            return $this->redirect($request, $response, 'app.login');
        }

        if (strtotime(date('Y-m-d H:i:s')) > strtotime($item->senha_key_data)) {
            $this->container->get('flash')->addMessage('error', 'Link expirado, tente novamente!');
            return $this->redirect($request, $response, 'app.login');
        }

        if ($request->getMethod() === 'GET'){
            return $this->container->get('view')->render($response, 'admin/senha.twig');
        }

        $validator = $this->container->get('validator')->validate($request, [
            'senha' => v::notEmpty()->noWhitespace()->length(4),
            'senha_confirmar' => v::notEmpty()->noWhitespace()->length(4),
        ]);

        if ($validator->failed()) {

            $errors = $validator->errors();

            $_SESSION['errors'] = $errors;
        
            $this->container->get('flash')->addMessage('error', 'Erro nos dados enviados!');
        
            return $this->redirect($request, $response, 'app.login');
        }




        if ($params['senha'] != $params['senha_confirmar']) {
            $this->container->get('flash')->addMessage('error', 'As senhas não estão iguais, digite novamente!');
            return $this->redirect($request, $response, 'app.login');
        }

        $item->senha = $params['senha'];
        $item->senhamd5 = password_hash($params['senha'], PASSWORD_DEFAULT);
        $item->senha_key = '';
        $item->save();

        $this->container->get('flash')->addMessage('success', 'Senha alterada com sucesso!');
        return $this->redirect($request, $response, 'app.login');
    }

    function hideEmail($email) {
        list($username, $domain) = explode('@', $email);
        $hiddenUsername = substr($username, 0, 3) . str_repeat('*', strlen($username) - 3); // Mantém os 3 primeiros caracteres e substitui o restante por asteriscos
        return $hiddenUsername . '@' . $domain;
    }
}