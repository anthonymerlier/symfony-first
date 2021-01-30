<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController {

    /**
     * @Route("/", name="index")
     */
    public function index(){
        echo "Hello World !";
        die;
    }

    /**
     * @Route("/about/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */
    public function about(Request $request, $age){
        return new Response("Vous avez $age ans !");
    }

}