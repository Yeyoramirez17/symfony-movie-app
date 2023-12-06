<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Form\GenreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManage)
    {
        $this->entityManager = $entityManage;
    }

    #[Route('/genres', name: 'app_genres', methods: ['GET'])]
    public function index(): Response
    {
        $genres = $this->entityManager->getRepository(Genre::class)->findAll();

        return $this->render('genre/index.html.twig', [
            'genres' => $genres,
        ]);
    }

    #[Route('/genres/create', name: 'app_genre_create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($genre);
            $this->entityManager->flush();

            $this->addFlash('success', 'Genre created successfully');

            return $this->redirectToRoute('app_genre_show', ['id' => $genre->getId()]);
        }

        return $this->render('genre/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/genres/{id}', name: 'app_genre_show', methods: ['GET'])]
    public function show(int $id): Response
    {
        $genre = $this->entityManager->getRepository(Genre::class)->find($id);

        if(!$genre)
        {
            throw new NotFoundHttpException('Genre not found');
        }

        return $this->render('genre/show.html.twig', [
            'genre' => $genre,
        ]);
    }

    #[Route('genres/{id}/edit', name: 'app_genre_edit', methods: ['GET', 'POST'])]
    public function edit( int $id, Request $request ): Response
    {
        $genre = $this->entityManager->getRepository( Genre::class )->find( $id );
        if ( !$genre ) {
            throw $this->createNotFoundException('Genre Not Found');
        }

        $form = $this->createForm( GenreType::class, $genre );
        $form->handleRequest( $request );

        if( $form->isSubmitted() && $form->isValid() )
        {
            $this->entityManager->flush();
            $this->redirect('app_genres');
        }
        return $this->render('genre/edit.html.twig', [
            'form' => $form->createView(),
            'genre' => $genre
        ]);
    }
}
