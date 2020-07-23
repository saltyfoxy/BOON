<?php

namespace App\Controller;

use App\Entity\Store;
use App\Repository\StoreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

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
     * @Route("stores/detail/{id}", name="detail_store"), methods={"GET"})
     */
    public function getOneStore(StoreRepository $repository, Store $store): Response
    {
        $store = $repository->findOneBy(array(
            'id' => $store->getId(),
        ));
        $products_store = $repository->getStore(':id');
        $sid = $repository->getStore(':id');
        $em = $this->getDoctrine()->getManager();
        $em->getRepository('App:Store')->getStore($sid);

        if(null === $store) {
            throw $this->createNotFoundException('Store not found.');
        }

        return $this->render('store.html.twig', array(
            'store' => $store,
            'storeproduct' => $products_store,
        ));
    }

    /**
     * @Route("/search-stores", name="search_stores")
     */
    public function storeSearch(Request $request, StoreRepository $storeRepository)
    {

        $search = $request->get('recherche');

        $listSearch = $storeRepository->search(compact('search'));

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $options = [
            'circular_reference_handler' => (function ($object) {
                return $object->getId();
            }),
        ];

        $jsonContent = $serializer->serialize($listSearch, 'json', $options);

        $response = new Response($jsonContent);
        return $response;
    }
}