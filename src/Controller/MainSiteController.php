<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainSiteController extends AbstractController
{
    #[Route('/', name: 'app_main_site')]
    public function index()
    {
        return $this->render('mainsite.php.twig');
    }
}
