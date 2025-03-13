<?php

namespace App\Auth;

use App\Models\Cliente;

class AuthUser
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function user()
    {   
        if (isset($_SESSION['cliente'])) {
            return Cliente::find($_SESSION['cliente']);
        }
    }

    public function checkUser()
    {
        return isset($_SESSION['cliente']);
    }

    public function attempt(string $user, string $password)
    {
        $user = Cliente::where([['email', $user], ['status', '=', 'A']])->first();

        if (!$user || !password_verify($password, $user->senhamd5)) {
            // Acessando o flash messages corretamente usando o método get()
            $this->container->get('flash')->addMessage('error', 'Usuário ou senha inválidos! Tente novamente.');
            return false;
        }

        $_SESSION['cliente'] = $user->id;
        $_SESSION['clienteLogo'] = $user->logo;
        $_SESSION['clienteDados'] = $user;

        return true;
    }
}
