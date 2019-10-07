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
class ArtistController extends AbstractController
{
    /**
     * @Route("/artists", name="all_artist")
     */
    public function index(Request $request, ArtistRepository $repository): Response
    {
        $artists = $repository->findAll();
        return $this->render('artists.html.twig', array(
            'artists' => $artists,
        ));
    }
    /**
     * @Route("/artist/detail/{id}", name="detail_artist"))
     */
    public function getOneArtist(ArtistRepository $repository, Artist $artist): Response
    {
        $artist = $repository->findOneBy(array('id' => $artist->getId(),));
        return $this->render('artist.html.twig', array(
            'artist' => $artist,
        ));
    }
}