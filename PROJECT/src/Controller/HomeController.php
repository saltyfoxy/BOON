<?php


namespace App\Controller;

use App\Entity\Product;
use App\Entity\Store;
use App\Entity\storew;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("stores/{id}/favorite",name="store_favorite", requirements={"id":"\d+"})
     */

    public function favorite(Store $store, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()->getStores()->contains($store)) {
            $this->getUser()->removeStore($store);
        } else {
            $this->getUser()->addStore($store);
        }

        $entityManager->flush();
        $this->addFlash('notice', 'Bien ajouté en favoris !');


        return $this->json(
            [
                'isFav' => $this->getUser()->isFavoritestore($store)
            ]
        );
    }

    /**
     * @Route("stores/{id}/delete", name="store_favorite_delete", requirements={"id":"\d+"}, methods={"DELETE"})
     */

    public function deleteFavoriteStore(Store $store, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser()->getStores()->contains($store)) {
            $this->getUser()->removeStore($store);
            $entityManager->flush();
        }

        return new Response();
    }




    /**
     * @Route("products/{id}/favorite",name="product_favorite", requirements={"id":"\d+"})
     */

    public function favoriteProduct(Product $product, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()->getProducts()->contains($product)) {
            $this->getUser()->removeProduct($product);
        } else {
            $this->getUser()->addProduct($product);
        }

        $entityManager->flush();
        $this->addFlash('notice', 'Bien ajouté en favoris !');


        return $this->json(
            [
                'isFav' => $this->getUser()->isFavoriteProduct($product)
            ]
        );
    }

    /**
     * @Route("products/{id}/delete", name="product_favorite_delete", requirements={"id":"\d+"}, methods={"DELETE"})
     */

    public function deleteFavoriteProduct(Product $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser()->getProducts()->contains($product)) {
            $this->getUser()->removeProduct($product);
            $entityManager->flush();
        }

        return new Response();
    }
}
