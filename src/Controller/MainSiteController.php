<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainSiteController extends AbstractController
{
    #[Route('/main/site', name: 'app_main_site')]
    public function index(): JsonResponse
    {
        return $this->render('main_site/index.html.twig');
    }
}
