<?php

namespace App\Controller;

use App\Entity\Gite;
use App\Form\GiteType;
use App\Repository\GiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comments;
use App\Form\CommentsType;
use Symfony\Component\Validator\Constraints\DateTime;
use Monolog\DateTimeImmutable;
use Doctrine\DBAL\Types\DateImmutableType;
use Doctrine\DBAL\Types\DateTimeImmutableType;
use App\Repository\CommentsRepository;
use App\Repository\CommentRepository;

// #[Route('/affichergite')]
class AffichergiteController extends AbstractController
{
    #[Route('/affichergite', name: 'app_affichergite_index', methods: ['GET'])]
    public function index(GiteRepository $giteRepository): Response
    {
        return $this->render('affichergite/index.html.twig', [
            'gites' => $giteRepository->findAll(),
        ]);
    }

    #[Route('/affichergitenew', name: 'app_affichergite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GiteRepository $giteRepository): Response
    {
        $gite = new Gite();
        $form = $this->createForm(GiteType::class, $gite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $giteRepository->add($gite, true);

            return $this->redirectToRoute('app_affichergite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('affichergite/new.html.twig', [
            'gite' => $gite,
            'form' => $form,
        ]);
    }

    #[Route('/affichergite:{id}', name: 'app_affichergite_show', methods: ['GET','POST'])]
    public function show(Request $request, Gite $gite, CommentsRepository $commentRepository): Response
    {

        
        // Partie commentaires
        // On crée le commentaire vierge
        $comment = new Comments();
        

        // On génère le formulaire
        $commentForm = $this->createForm(CommentsType::class, $comment);
        $commentForm->handleRequest($request);

        // Traitement du formulaire
        if($commentForm->isSubmitted() && $commentForm->isValid()) {
            
            $comment->setCreatedAt(new \DateTimeImmutable());
            $comment->setGite($gite);
            
            // On récupère le contenu du champ parentid
            //$parentid= $commentForm->get("parentid")->getData();

            // On va chercher le commentaire correspondant
            //$parent = $commentRepository->find($parentid);

            // On définit le parent
            //$comment->setParent($parent);

            $commentRepository->add($comment, true);
            $this->addFlash('message', 'Votre message à été envoyé');
            return $this->render('affichergite/show.html.twig', [
                 'gite' => $gite,
                 'commentForm' => $commentForm->createView()
            ]);
        }

        return $this->render('affichergite/show.html.twig', [
            'gite' => $gite,
            'commentForm' => $commentForm->createView()
        ]);
    }

    

    #[Route('affichergite:/{id}/edit', name: 'app_affichergite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Gite $gite, GiteRepository $giteRepository): Response
    {
        $form = $this->createForm(GiteType::class, $gite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $giteRepository->add($gite, true);

            return $this->redirectToRoute('app_affichergite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('affichergite/edit.html.twig', [
            'gite' => $gite,
            'form' => $form,
        ]);
    }

    #[Route('affichergite:{id}', name: 'app_affichergite_delete', methods: ['POST'])]
    public function delete(Request $request, Gite $gite, GiteRepository $giteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gite->getId(), $request->request->get('_token'))) {
            $giteRepository->remove($gite, true);
        }

        return $this->redirectToRoute('app_affichergite_index', [], Response::HTTP_SEE_OTHER);
    }

    // Ajout de la methode pour afficher les gîtes par département
    #[Route('/AG:departement={departement}', name: 'app_affichergite_by_dep', methods: ['GET'])]
    public function afficherGitesByDep(GiteRepository $giteRepository, $departement): Response
    {
        return $this->render('affichergite/index.html.twig', [
            'gites' => $giteRepository->findBy(array('departement' => $departement)),
        ]);
    }

    // Ajout de la methode pour afficher les gîtes par ville
    #[Route('/AG:ville={ville}', name: 'app_affichergite_by_ville', methods: ['GET'])]
    public function afficherGitesByVille(GiteRepository $giteRepository, $ville): Response
    {
        return $this->render('affichergite/index.html.twig', [
            'gites' => $giteRepository->findBy(array('ville' => $ville)),
        ]);
    }
}
