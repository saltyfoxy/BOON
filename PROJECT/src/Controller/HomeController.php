<?php


namespace App\Controller;

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
        if ($this->getUser()->getStore()->contains($store)) {
            $this->getUser()->removeStore($store);
        } else {
            $this->getUser()->addStore($store);
        }

        $entityManager->flush();
        $this->addFlash('notice', 'Bien ajouté au panier !');


        return $this->json(
            [
                'isFav' => $this->getUser()->isFavoritestore($store)
            ]
        );
    }

    /**
     * @Route("stores/{id}/delete", name="store_favorite_delete", requirements={"id":"\d+"}, methods={"DELETE"})
     */

    public function deleteFavoritestore(Store $store, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser()->getstorew()->contains($store)) {
            $this->getUser()->removestorew($store);
            $entityManager->flush();
        }

        return new Response();
    }
}
