<?php


namespace App\Controller;

use App\Entity\Showw;
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
     * @Route("shows/{id}/favorite",name="show_favorite", requirements={"id":"\d+"})
     */

    public function favorite(Showw $showw, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()->getShoww()->contains($showw)) {
            $this->getUser()->removeShoww($showw);
        } else {
            $this->getUser()->addShoww($showw);
        }

        $entityManager->flush();
        $this->addFlash('notice', 'Bien ajouté au panier !');


        return $this->json(
            [
                'isFav' => $this->getUser()->isFavoriteShow($showw)
            ]
        );
    }

    /**
     * @Route("shows/{id}/delete", name="show_favorite_delete", requirements={"id":"\d+"}, methods={"DELETE"})
     */

    public function deleteFavoriteShow(Showw $showw, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser()->getShoww()->contains($showw)) {
            $this->getUser()->removeShoww($showw);
            $entityManager->flush();
        }

        return new Response();
    }
}
