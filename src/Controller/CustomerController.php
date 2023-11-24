<?php

namespace App\Controller;

use App\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Customer;
use Doctrine\Persistence\ManagerRegistry;

class CustomerController extends AbstractController
{
    #[Route('/form/customer', name: 'form_customer')]
    public function index(Request $request, ManagerRegistry $doctrine)
    {
        $customer = new Customer();
        $customerForm = $this->createForm(CustomerType::class, $customer);

        $customerForm->handleRequest($request);
        if ($customerForm->isSubmitted() && $customerForm->isValid()) 
        {
            // afficher les informations du formulaire
            dump($request->request->all());

            $entityManager = $doctrine->getManager();
            $client = $customerForm->getData();
            $entityManager->persist($client); // prepare les données à l'insertion
            $entityManager->flush(); // fait l'insert
        }

        return $this->render('customer/index.html.twig', [
            'customerForm' => $customerForm->createView() 
        ]);
    }
}
