<?php
// package
namespace App\Controller;

// import
use Symfony\Component\HttpFoundation\Response;

class HomeController {
    public function bonjour() {
        return new Response("Hello all !");
    }
}