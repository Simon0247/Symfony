<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrameController extends AbstractController
{
    #[Route('/frame', name: 'frame')]
    public function index(): Response
    {
        return $this->render('frame.html.twig', [
            'page_title' => 'FrameController',
        ]);
    }
    #[Route('/categorie', name: 'categorie')]
    public function categorie(): Response
    {
        return $this->render('symfony/categorie.html.twig', [
            'page_title' => 'FrameController',
        ]);
    }
    #[Route('/plats', name: 'plats')]
    public function plats(): Response
    {
        return $this->render('plats.html.twig', [
            'page_title' => 'FrameController',
        ]);
    }
    #[Route('/commande', name: 'commande')]
    public function commande(): Response
    {
        return $this->render('commande.html.twig', [
            'page_title' => 'FrameController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig', [
            'page_title' => 'FrameController',
        ]);
    }
}