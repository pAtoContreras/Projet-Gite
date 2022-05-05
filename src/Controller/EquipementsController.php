<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipementsController extends AbstractController
{
    #[Route('/equipements', name: 'app_equipements')]
    public function index(): Response
    {
        return $this->render('equipements/index.html.twig', [
            'controller_name' => 'EquipementsController',
        ]);
    }
}
