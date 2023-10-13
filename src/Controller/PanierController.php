<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function index(PlatRepository $repo): Response
    {
        $plat = $repo->findAll();

        

        return $this->render('accueil.html.twig', [
            'plat' => $plat,
        ]);
    }

    #[Route('/add/{plat}', name: 'panier_add')]
    public function add(SessionInterface $session, Plat $plat, Request $request): Response
    {
        $panier = $session->get("panier", []);

        $panier[] = [
            "plat" => $plat,
            "quantite" => 1
        ];

        $session->set("panier", $panier);

        // $referer = (string) $request->headers->get('referer');

        // dd($referer);

        return $this->redirect("/panier");
    }

    #[Route('/panier', name: 'panier')]
    public function panier(SessionInterface $session, PlatRepository $repo): Response
    {
        $panier = $session->get("panier", []);
        // dd($panier);

        
        
        return $this->render('panier/index.html.twig', [
            'panier' => $panier
        ]);
    }
}