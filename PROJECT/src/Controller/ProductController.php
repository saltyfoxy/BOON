<?php
namespace App\Controller;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ProductController extends AbstractController
{
    /**
     * @Route("/products", name="all_products")
     */
    public function index(Request $request, ProductRepository $repository): Response
    {
        $products = $repository->findAll();
        return $this->render('products.html.twig', array(
            'products' => $products,
        ));
    }
    /**
     * @Route("/product/detail/{id}", name="detail_product"))
     */
    public function getOneArtist(ProductRepository $repository, Product $product): Response
    {
        $product = $repository->findOneBy(array('id' => $product->getId(),));
        return $this->render('product.html.twig', array(
            'product' => $product,
        ));
    }
}