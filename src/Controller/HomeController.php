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

    #[Route('/customers', name:'customers_lists')]
    public function showCustomers() 
    {
        $customers = ['Laurent', 'Yves', 'Alain', 'Gérard'];
        return $this->render('customer.html.twig', ['customers' => $customers]);
    }

    #[Route('/category/{id', name:'category')]
    public function getCategory(int $id) 
    {
        $category_id = $id;
        return $this->render('category.html.twig', ['id_category' => $id]);

    }
}
