<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/', name: 'app_root')]
    public function root(): RedirectResponse
    {
        return $this->redirect('/fr');
    }

    #[Route('/fr', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('blog/home.html.twig');
    }

    #[Route('fr/cv', name: 'app_cv')]
    public function CV(): Response
    {
        return $this->render('blog/cv.html.twig');
    }
    #[Route('fr/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig');
    }
    #[Route('/en', name: 'app_home_en')]
    public function home_anglais(): Response
    {
        return $this->render('blog/en/home_en.html.twig');
    }

    #[Route('/en/cv', name: 'app_cv_en')]
    public function CV_anglais(): Response
    {
        return $this->render('blog/en/cv_en.html.twig');
    }
    #[Route('/en/portfolio', name: 'app_portfolio_en')]
    public function portfolio_anglais(): Response
    {
        return $this->render('blog/en/portfolio_en.html.twig');
    }
}