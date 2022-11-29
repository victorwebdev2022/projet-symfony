<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ProduitController
{
    // #[Route('/produit/{id?0}', requirements: ['id'=>'\d{1,3}'] , name: 'produit')]
    public function affiche(Request $request): Response
    {
       
        return new Response('ID  produits : '. $request->query->get('id'));
    }
    // #[Route('/produit/slug', requirements: ['slug'=>'[a-z]*'] , name: 'produit-by-slug')]
    public function affiche_by_slug(Request $request): Response
    {
       
        return new Response('Slug  produits : '. $request->query->get('slug'));
    }
}