<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/produit')]
final class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($produit);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(), 
        ]);
    }

    #[Route('/{seqprod}', name: 'app_produit_show', methods: ['GET'])]
    public function show(int $seqprod, ProduitRepository $produitRepository): Response
    {
        $produit = $produitRepository->find($seqprod);
        
        if (!$produit) {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{seqprod}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $seqprod, EntityManagerInterface $entityManager, ProduitRepository $produitRepository): Response
    {
        $produit = $produitRepository->find($seqprod);
        
        if (!$produit) {
            throw $this->createNotFoundException('Produit non trouvé');
        }
    
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
    
            $this->addFlash('success', 'Produit mis à jour avec succès');
    
            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        } else if ($form->isSubmitted()) {
            $this->addFlash('error', 'Erreur dans le formulaire');
        }
    
        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(), 
        ]);
    }

    #[Route('/{seqprod}/delete', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, int $seqprod, EntityManagerInterface $entityManager, ProduitRepository $produitRepository): Response
    {
        $produit = $produitRepository->find($seqprod);
        
        if (!$produit) {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        if ($this->isCsrfTokenValid('delete'.$produit->getSeqprod(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
            
            $this->addFlash('success', 'Produit supprimé avec succès');
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
}