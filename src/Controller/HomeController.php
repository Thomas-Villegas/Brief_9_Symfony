<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Jeux;
use Doctrine\ORM\EntityManagerInterface;



class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $jeux = $entityManager->getRepository(Jeux::class)->findAll();

        return $this->render('home/index.html.twig', ['jeux' => $jeux]);
    }

    /**
     * @Route("/jeu/{id}", name="app_jeu")
     */
    public function jeu(EntityManagerInterface $entityManager, int $id): Response
    {
        $jeu = $entityManager->getRepository(Jeux::class)->findOneBy(['id' => $id]);

        return $this->render('home/jeu.html.twig', ['jeu' => $jeu]);
    }  
}
