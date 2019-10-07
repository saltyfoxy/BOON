<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    /**
     * @Route("/payments", name="means_of_payments")
     */
    public function index()
    {
        return $this->render('payments.html.twig');
    }
}