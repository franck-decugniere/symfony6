<?php
// package
namespace App\Controller;

// import
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{
    public function bonjour() {
        return new Response("Hello all !");
    }

    public function routeRedirect() {
        return $this->redirectToRoute('accueil');
    }

    public function redirect302() {
        return $this->redirect('https://www.google.fr');
    }

    public function template() {
        return $this->render('base.html.twig', []);
    }
}