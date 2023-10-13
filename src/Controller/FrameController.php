<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Security\EmailVerifier;
use App\Repository\PlatRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class FrameController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('accueil.html.twig', [
            'page_title' => 'FrameController',
        ]);
    }


    #[Route('/categorie', name: 'categorie')]
    public function categorie(CategorieRepository $repo): Response
    {
        $liste = $repo->findAll();

        

        return $this->render('symfony/categorie.html.twig', [
            'page_title' => 'FrameController',
            'liste' => $liste,
        ]);
    }

    #[Route('/categorie_plats/{cat}', name: 'categorie_plats')]
    public function categorie_plats(Categorie $cat): Response
    {
        $liste = $cat->getPlats();
        
        dd ($liste);
        

        return $this->render('symfony/categorieplat.html.twig', [
            'page_title' => 'FrameController',
            'liste' => $liste,
        ]);
    }


    #[Route('/plats', name: 'plats')]
    public function plats(PlatRepository $repo): Response
    {

        $liste = $repo->findAll();

        return $this->render('plats.html.twig', [
            'page_title' => 'FrameController',
            'liste' => $liste,

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

    #[Route('/add/{id}', name: 'panier_add')]
    public function add(SessionInterface $session, Plat $id): Response
    {

        $panier = $session->get('panier', []);

        $panier[] = [
            "plat" => $id,
            "quantite" => 1
        ];

        $session->set('panier', $panier);


        return $this->redirect('/panier');
    }

    #[Route('/panier', name: 'panier')]
    public function panier(SessionInterface $session): Response
    {

        $panier = $session->get('panier', []);

        return $this->render('panier.html.twig', [
            'panier' => $panier,
        ]);
    }

    
    #[Route('/login', name: 'connexion')]
    public function connexion(): Response
    {
        return $this->render('login.html.twig', [
            'page_title' => 'FrameController',
        ]);
    }

    
}