<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('blog/home.html.twig');
    }

    #[Route('/cv', name: 'app_cv')]
    public function CV(): Response
    {
        return $this->render('blog/cv.html.twig');
    }
}