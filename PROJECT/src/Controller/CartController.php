<?php


namespace App\Controller;


use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Store;
use App\Repository\StoreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart_page")
     */
    public function store()
    {

        $favoriteStore = $this->getUser()->getStores();
        $user = $this->getUser();


        return $this->render(
            'cart.html.twig',
            [
                'favoriteStores' => $favoriteStore,
                'user' => $user,
            ]
        );
    }
}