<?php

namespace App\Controller;

use App\Security\EmailVerifier;
use App\Form\FormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        $form = $this->createForm(FormType::class);

        return $this->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }

    
}
