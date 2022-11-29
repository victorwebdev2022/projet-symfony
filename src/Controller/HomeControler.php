<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{    
    // #[Route('/', name: 'home')]
    public function accueil(): Response
    {
       dump(__METHOD__);
       return new Response('Hello World');
    }
}
