<?php


namespace App\Controller;


use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Showw;
use App\Repository\ShowwRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart_page")
     */
    public function show()
    {

        $favoris = $this->getUser()->getShoww();
        $user = $this->getUser();


        return $this->render(
            'cart.html.twig',
            [
                'favoris' => $favoris,
                'user' => $user,
            ]
        );
    }
}