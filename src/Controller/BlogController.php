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
    #[Route('/fr/Pour_En_Savoir_+', name: 'app_PES+')]
    public function PourEnSavoirPlus(): Response
    {
        return $this->render('blog/PourEnSavoir+.html.twig');
    }

    #[Route('fr/cv', name: 'app_cv')]
    public function CV(): Response
    {
        return $this->render('blog/cv.html.twig');
    }

    #[Route('fr/cv/formations', name: 'app_cv_formations')]
    public function CV_formations(): Response
    {
        return $this->render('blog/cv_formations.html.twig');
    }
    
    #[Route('fr/cv/experience', name: 'app_cv_exp')]
    public function CV_exp(): Response
    {
        return $this->render('blog/cv_exp.html.twig');
    }


    #[Route('/fr/cv/telechargement', name: 'app_cv_telechargement')]
    public function CV_D(): Response
    {
        return $this->render('blog/cv_telechargement.html.twig');
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

    #[Route('/en/Pour_En_Savoir_+', name: 'app_en_PES+')]
    public function PourEnSavoirPlus_en(): Response
    {
        return $this->render('blog/en/PourEnSavoir+.html.twig');
    }

    #[Route('/en/cv', name: 'app_cv_en')]
    public function CV_anglais(): Response
    {
        return $this->render('blog/en/cv_en.html.twig');
    }
    #[Route('en/cv/formations', name: 'app_cv_en_formations')]
    public function CV_en_formations(): Response
    {
        return $this->render('blog/en/cv_formations.html.twig');
    }
    
    #[Route('en/cv/experience', name: 'app_cv_en_exp')]
    public function CV__en_exp(): Response
    {
        return $this->render('blog/en/cv_exp.html.twig');
    }
    
    #[Route('/en/cv/telechargement', name: 'app_cv_en_telechargement')]
    public function CV_anglais_D(): Response
    {
        return $this->render('blog/en/cv_telechargement.html.twig');
    }

    #[Route('/en/portfolio', name: 'app_portfolio_en')]
    public function portfolio_anglais(): Response
    {
        return $this->render('blog/en/portfolio_en.html.twig');
    }

}