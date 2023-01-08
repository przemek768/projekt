<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users;
use App\Form\RegisterFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]

    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager){
        $user = new Users();
        $form = $this->createForm(RegisterFormType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_main_site');
        }
        return new Response($twig->render('register/index.php.twig', [
            'register_form' => $form->createView(),
        ]));
    }
}
