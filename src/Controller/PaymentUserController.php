<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PaymentUserController extends AbstractController{
    #[Route('/payment/user', name: 'app_payment_user')]
    public function index(): Response
    {
        return $this->render('payment_user/index.html.twig', [
            'controller_name' => 'PaymentUserController',
        ]);
    }
}
