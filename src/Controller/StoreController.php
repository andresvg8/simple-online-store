<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StoreController extends AbstractController
{
    /**
     * @Route("/store", name="store")
     */
    public function index()
    {
        return $this->render('store/index.html.twig', [
            'controller_name' => 'StoreController',
        ]);
    }

    /**
     * @Route("/product/{id}", name="product")
     */
    public function storeProduct($id)
    {
        return $this->render('store/product.html.twig', [
            'controller_name' => 'StoreController',
            'product_id' => $id
        ]);
    }
}
