<?php

namespace App\Controllers;


class DashboardController extends Controller
{    
    public function index($request, $response)
    {
        
        $data = [
            'configs' => $this->configs
        ];

        return $this->container->get('view')->render($response,'admin/dashboard.twig', $data);
    }
}