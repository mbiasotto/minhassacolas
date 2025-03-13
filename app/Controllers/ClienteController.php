<?php

namespace App\Controllers;
use App\Models\Cliente;
use Respect\Validation\Validator as v;
use App\Helpers\Helpers as Helper;

class ClienteController extends Controller
{    
    const currentPage = 'clientes';    
    const currentTitle = 'Clientes';    

    public function index($request, $response)
    {
        $getParams = $request->getQueryParams();

        $filtro = $getParams['filtro'] ?? null;
        $filtro_campos = array('nome');
        $getFilters = Helper::getFilters(array('filtro'=>$filtro));

        $pageCurrent = @(int)$getParams['page'];
        $itens = Cliente::orderBy('ordem','ASC');

        if($filtro)
        {
            $itens = $itens->Filter($filtro, $filtro_campos);
        }

        $itens = $itens->Paginates(array('limite'=>$this->configs['pagesLimit'],'page'=>$pageCurrent));
        $pagesLink = Helper::getPaginate(array('current'=>$pageCurrent,'pages'=>$itens->lastPage(),'links'=>$getFilters));       

        $data = [
            'page' => self::currentPage,
            'title' => self::currentTitle,
            'data' =>  $itens,
            'pagesLink' =>  $pagesLink,
            'pageCurrent' =>  $pageCurrent,
            'getFilters' => $getFilters,
            'configs' => $this->configs
        ];

        return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/index.twig',$data);
    }

    public function create($request, $response)
    {
        if ($request->getMethod() === 'GET')
        {
            $data = [
                'page' => self::currentPage,
                'title' => self::currentTitle,
                'configs' => $this->configs
            ];

            return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/create.twig',$data);
        }

        $post = $request->getParsedBody();

        $directory = $this->container->get('upload_directory').'/'.self::currentPage;

        $uploadedFiles = $request->getUploadedFiles();
        $imagem_name = null;

        $imagem = $uploadedFiles['imagem'];
        if ($imagem && $imagem->getError() === UPLOAD_ERR_OK) {
            $imagem_name = $this->moveUploadFile($directory, $imagem);
        } else {
            $this->container->get('flash')->addMessage('error','Erro ao enviar o imagem!');
        }

        Cliente::create([
            'nome' => $post['nome'],
            'ordem' => $post['ordem'],
            'imagem' => $imagem_name,
        ]);

        $this->container->get('flash')->addMessage('success','Cadastro realizado com sucesso');
        return $this->redirect($request, $response, 'app.'.self::currentPage);
    }

    public function edit($request, $response, $params)
    {
        $item = Cliente::where('id',$params['id'])->first();

        if(!$item)
        {
            $this->container->get('flash')->addMessage('error','Registro não encontrado');
            return $this->redirect($request, $response, 'app.'.self::currentPage);
        }
    
        $data = [
            'page' => self::currentPage,
            'title' => self::currentTitle,
            'd' => $item,
            'configs' => $this->configs
        ];

        return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/edit.twig', $data);
    }

    public function update($request, $response, $params)
    {
        $post = $request->getParsedBody();
        
        $item = Cliente::find($params['id']);

        $directory = $this->container->get('upload_directory').'/'.self::currentPage;
        $uploadedFiles = $request->getUploadedFiles();

        //ADD IMAGEM
        $error_file = 0;

        $imagem = $uploadedFiles['imagem'];
        if ($imagem && $imagem->getError() === UPLOAD_ERR_OK) {
            if($imagem->GetError()){
                $error_file = 1;                
            }else{
                //Verifica se tem imagem
                if($item->imagem!="")
                {    
                    unlink($directory.'/'.$item->imagem);
                }                
                $imagem_name = $this->moveUploadFile($directory, $imagem);
            }            
        }else{
            $imagem_name = null;
        }

        if($error_file != 0)
        {           
           $this->container->get('flash')->addMessage('error','Erro ao enviar o imagem!');
        }
        //END - ADD IMAGEM

        $item->nome = $post['nome'];
        $item->ordem = $post['ordem'];

        if (isset($imagem_name)) {
            $item->imagem = $imagem_name;
        }

        $item->save();

        $this->container->get('flash')->addMessage('success','Atualização realizada com sucesso');
        return $this->redirect($request, $response, 'app.'.self::currentPage);
    }

    public function delete($request, $response, $params)
    {
        $item = Cliente::find($params['id']);

        if($item)
        {   
            //Exluir fotos
            $directory = $this->container->get('upload_directory').'/'.self::currentPage;

            if($item->imagem!="")
            {    
                unlink($directory.'/'.$item->imagem);
            }
            
            $item->delete();
           $this->container->get('flash')->addMessage('success','Exclusão realizada com sucesso!');
        }
        else
        {
           $this->container->get('flash')->addMessage('error','Erro ao excluir!');
        }

        return $this->redirect($request, $response, 'app.'.self::currentPage);
    }

    public function ajaxOrder($request, $response, $params)
    {
        $post = $request->getParsedBody();

        if (isset($post['order']) && is_array($post['order'])) {
            foreach ($post['order'] as $item) {
                $registro = Cliente::find($item['id']);
                if ($registro) {
                    $registro->ordem = $item['ordem'];
                    $registro->save();
                }
            }

            $this->container->get('flash')->addMessage('success', 'Ordem atualizada com sucesso!');
            return $response->withJson(['status' => 'success', 'message' => 'Ordem atualizada com sucesso!']);
        }

        $this->container->get('flash')->addMessage('error', 'Dados inválidos');
        return $response->withJson(['status' => 'error', 'message' => 'Dados inválidos'], 400);
    }
    
}
