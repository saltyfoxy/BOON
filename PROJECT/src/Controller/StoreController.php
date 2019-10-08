<?php

namespace App\Controller;

use App\Entity\Store;
use App\Repository\StoreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoreController extends AbstractController
{
    /**
     * @Route("/stores", name="all_stores")
     */
    public function index(Request $request, StoreRepository $repository): Response
    {
        $stores = $repository->findAll();
        return $this->render('stores.html.twig', array(
            'stores' => $stores,
        ));
    }

    /**
     * @Route("stores/detail/{id}", name="detail_store"))
     */
    public function getOneShow(StoreRepository $repository, Store $store): Response
    {
        $store = $repository->findOneBy(array(
            'id' => $store->getId(),
        ));
        return $this->render('store.html.twig', array(
            '$store' => $store,
        ));
    }
}