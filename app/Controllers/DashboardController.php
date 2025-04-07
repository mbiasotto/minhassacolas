<?php

namespace App\Controllers;


class DashboardController extends Controller
{    
    public function index($request, $response)
    {
        
        $data = [];

        return $this->container->get('view')->render($response,'admin/dashboard.twig', $data);
    }
}