<?php

namespace App\Controller;

use App\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route('/form/customer', name: 'form_customer')]
    public function index()
    {
        $customerForm = $this->createForm(CustomerType::class);
        return $this->render('customer/index.html.twig', [
            'customerForm' => $customerForm->createView() 
        ]);
    }
}
