<?php

namespace App\Controller;

use App\Entity\March;
use App\Form\MarchFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class MarchController extends AbstractController
{
    #[Route('/march', name: 'app_march')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $march = new March();
        $form = $this->createForm(MarchFormType::class, $march);
        $march->setIdUser($this->getUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($march);
            $entityManager->flush();
            return $this->redirectToRoute('profile');
        }

        return $this->render('march/march.html.twig', [
            'marchForm' => $form->createView(),
        ]);
    }

    #[Route('/edit-march/{id}', name: 'edit_march')]
    public function editMarch(Request $request, March $march, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MarchFormType::class, $march);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var March $march */
            $march = $form->getData();

            $entityManager->persist($march);
            $entityManager->flush();
            return $this->redirectToRoute('profile');
        }

        return $this->render('march/edit-march.html.twig', [
            'editMarchForm' => $form->createView(),
            'id' => $march->getId()
        ]);
    }
}
