<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use App\Repository\GiteRepository;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request): Response
    {
        $departement = null;
        $ville = null;
        $distance = null;
        $date = null;
        $laveVaisselle = null;
        $laveLinge = null;
        $climatisation = null;
        $television = null;
        $terrasse = null;
        $barbecue = null;
        $piscinePrivee = null;
        $piscinePartagee = null;
        $tennis = null;
        $pingPong = null;
        $locationLinge = null;
        $menage = null;
        $accesInternet = null;

        $form = $this->createForm(SearchType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() &&$form->isValid()) {
            if($form->get('departement')->getData() !== null) {
                $departement = $form->get('departement')->getData();
            }
            if($form->get('ville')->getData() !== null) {
                $ville = $form->get('ville')->getData();
            }
            if($form->get('distance')->getData() !== null) {
                $distance = $form->get('distance')->getData();
            }
            if($form->get('date')->getData() !== null) {
                $date = $form->get('date')->getData();
            }
            if($form->get('laveVaisselle')->getData() !== null) {
                $laveVaisselle = $form->get('laveVaisselle')->getData();
            }
            if($form->get('laveLinge')->getData() !== null) {
                $laveLinge = $form->get('laveLinge')->getData();
            }
            if($form->get('climatisation')->getData() !== null) {
                $climatisation = $form->get('climatisation')->getData();
            }
            if($form->get('television')->getData() !== null) {
                $television = $form->get('television')->getData();
            }
            if($form->get('terrasse')->getData() !== null) {
                $terrasse = $form->get('terrasse')->getData();
            }
            if($form->get('barbecue')->getData() !== null) {
                $barbecue = $form->get('barbecue')->getData();
            }
            if($form->get('piscinePrivee')->getData() !== null) {
                $piscinePrivee = $form->get('piscinePrivee')->getData();
            }
            if($form->get('piscinePartagee')->getData() !== null) {
                $piscinePartagee = $form->get('piscinePartagee')->getData();
            }
            if($form->get('tennis')->getData() !== null) {
                $tennis = $form->get('tennis')->getData();
            }
            if($form->get('pingPong')->getData() !== null) {
                $pingPong = $form->get('pingPong')->getData();
            }
            if($form->get('locationLinge')->getData() !== null) {
                $locationLinge = $form->get('locationLinge')->getData();
            }
            if($form->get('menage')->getData() !== null) {
                $menage = $form->get('menage')->getData();
            }
            if($form->get('accesInternet')->getData() !== null) {
                $accesInternet = $form->get('accesInternet')->getData();
            }

            if($departement != null || $departement != '') {
                return $this->redirectToRoute('app_affichergite_by_dep', ['departement' => $departement]);
            } else if ($ville != null) {
                return $this->redirectToRoute('app_affichergite_by_ville', ['ville' => $ville]);
            }
            
            
        }

        return $this->render('search/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}
