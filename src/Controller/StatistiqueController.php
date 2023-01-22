<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\March;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

class StatistiqueController extends AbstractController
{
    #[Route('/statistique', name: 'app_statistique')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $commanders1 = $doctrine->getRepository(March::class)->countCommanders1();
        $commanders2 = $doctrine->getRepository(March::class)->countCommanders2();
        return $this->render('statistique/statistique.html.twig', [
            'controller_name' => 'StatistiqueController',
            'commanders1' => $commanders1,
            'commanders2' => $commanders2,
        ]);
    }
}
