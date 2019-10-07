<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Showw;
use App\Entity\Artist;
use App\Repository\ShowwRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    /**
     * @Route("/shows", name="all_shows")
     */
    public function index(Request $request, ShowwRepository $repository ): Response
    {
        $shows = $repository->findAll();
        return $this->render('shows.html.twig', array(
            'shows' => $shows,
        ));
    }

    /**
     * @Route("shows/detail/{id}", name="detail_show"))
     */
    public function getOneShow(ShowwRepository $repository, Showw $showw): Response
    {
        $showw = $repository->findOneBy(array(
            'id' => $showw->getId(),
        ));
        return $this->render('show.html.twig', array(
            'showw' => $showw,
        ));
    }
}