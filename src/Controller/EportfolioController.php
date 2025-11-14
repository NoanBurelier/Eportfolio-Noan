<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EportfolioController extends AbstractController
{
    #[Route('/eportfolioNoan', name: 'app_eportfolio')]
    public function index(): Response
    {
        return $this->render('eportfolio/index.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/Cv', name: 'CV')]
    public function CV(): Response
    {
        return $this->render('eportfolio/CV/CV.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/compétences', name: 'compétences')]
    public function Compétences(): Response
    {
        return $this->render('eportfolio/Mes compétences/Mescompétences.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/hobbies', name: 'hobbies')]
    public function Hobbies(): Response
    {
        return $this->render('eportfolio/Hobbies/hobbies.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/Contact', name: 'Contact')]
    public function Contact(): Response
    {
        return $this->render('eportfolio/Contact/contact.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/CV/atouts', name: 'atouts')]
    public function atouts(): Response
    {
        return $this->render('eportfolio/CV/atouts.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/CV/ExpériencesProfessionnelles', name: 'ExpPro')]
    public function ExpPro(): Response
    {
        return $this->render('eportfolio/CV/expériences.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/CV/VieAssociative', name: 'vie')]
    public function Vie(): Response
    {
        return $this->render('eportfolio/CV/vieassociative.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/CV/LettreDeMotivation', name: 'LM')]
    public function LM(): Response
    {
        return $this->render('eportfolio/CV/LettreMotivation.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/compétences/Administrer', name: 'Administrer')]
    public function Administrer(): Response
    {
        return $this->render('eportfolio/Mes compétences/Administrer.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/compétences/Connecter', name: 'Connecter')]
    public function Connecter(): Response
    {
        return $this->render('eportfolio/Mes compétences/Connecter.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/compétences/Programmer', name: 'Programmer')]
    public function Programmer(): Response
    {
        return $this->render('eportfolio/Mes compétences/Programmer.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/Hobbies/loisirs', name: 'loisirs')]
    public function loisirs(): Response
    {
        return $this->render('eportfolio/Hobbies/loisirs.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolioNoan/Hobbies/ProjetPerso', name: 'ProjetPerso')]
    public function ProjetPerso(): Response
    {
        return $this->render('eportfolio/Hobbies/projetPerso.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }


}
