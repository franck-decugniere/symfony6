<?php
// package
namespace App\Controller;

// import
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController
{
    public function bonjour()
    {
        return new Response("Hello all !");
    }

    public function routeRedirect()
    {
        return $this->redirectToRoute('accueil');
    }

    public function redirect302()
    {
    }

    public function template()
    {
        return $this->render('base.html.twig', []);
    }

    /**
     * @Route("/products", name="products_list")
     */
    public function showProducts()
    {
        $products = ['ordinateur', 'telephone', 'radio', 'k7'];
        return $this->render('product.html.twig', ['products' => $products]);
    }
}
