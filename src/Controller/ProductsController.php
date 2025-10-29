<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    // #[Route('/products', name: 'app_produit_index')]
    // public function index(): Response
    // {
    //     return $this->render('products/index.html.twig');
    // }

    // #[Route('/products/{id}', name: 'app_single_product')]
    // public function single(int $id): Response
    // {
    //     return $this->render('products/single-product.html.twig', [
    //         'product_id' => $id
    //     ]);
    // }
}