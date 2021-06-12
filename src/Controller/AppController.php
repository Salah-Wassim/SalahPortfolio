<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'Home')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig');
    }
    #[Route('/projects', name: 'Projects')]
    public function project(): Response
    {
        return $this->render('app/projects.html.twig');
    }
    #[Route('/view-project/{id}', name: 'viewProject')]
    public function viewProject(): Response
    {
        return $this->render('app/projects.html.twig');
    }
    #[Route('/contact', name: 'Contact')]
    public function contact(): Response
    {
        return $this->render('app/contact.html.twig');
    }
    #[Route('/cgu', name: 'CGU')]
    public function cgu(): Response
    {
        return $this->render('app/cgu.html.twig');
    }
    #[Route('/test', name: 'Test')]
    public function test(): Response
    {
        return $this->render('app/test.html.twig');
    }
}
