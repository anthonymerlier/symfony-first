<?php

namespace App\Controller;

use App\User\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController {

    /**
     * @Route("/welcome/{firstName}", name="welcome")
     */
    public function welcome(Request $request, $firstName = "John"){
        $user = new User();
        $firstName = $user->setName($firstName);
        $pseudo = $user->getName();
        return new Response("Bienvenue sur mon site $pseudo");
    }

}