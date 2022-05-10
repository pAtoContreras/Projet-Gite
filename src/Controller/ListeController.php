<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GiteRepository;
use App\Entity\Gite;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ListeController extends AbstractController
{
    #[Route('/liste', name: 'app_liste')]
    public function index(GiteRepository $gite)
    {
        return $this->render('liste/index.html.twig', [
            'controller_name' => 'ListeController',
        ]);
    }

    public function details($dep, GiteRepository $giteRepo)
    {
        $gite = $giteRepo->findGiteByDep(['departement' => $dep]); 

        if(!$gite){
           throw new NotFoundHttpException('Pas d\'annonce de gite trouvée'); 
        }
        dd($dep);
        return $this->render('liste/details.html.twig', compact('departement'));
    }
}
