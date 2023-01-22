<?php

namespace App\Controller;

use App\Entity\March;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/home', name: 'main')]
    public function home(ManagerRegistry $doctrine): Response
    {
        return $this->render('main/home.html.twig');
    }

    #[Route('/players', name: 'players')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $players = $doctrine->getRepository(User::class)->findAll();
        return $this->render('main/players.html.twig', [
            'players' => $players,
        ]);
    }

    #[Route('/profile', name: 'profile')]
    public function profile(ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();

        $marches = $doctrine->getRepository(March::class)->nbMarches($user);
        $countMarches = $doctrine->getRepository(March::class)->countMarches($user);
       
        return $this->render('main/profile.html.twig', [
            'marches' => $marches,
            'countMarches' => $countMarches
        ]);
    }

    #[Route('/player/{id}', name: 'player_view')]
    public function viewPlayer(ManagerRegistry $doctrine, User $user): Response
    {
        $marches = $doctrine->getRepository(March::class)->nbMarches($user);

        return $this->render('main/view-player.html.twig', [
            'user' => $user,
            'marches' => $marches,
        ]);
    }
}
