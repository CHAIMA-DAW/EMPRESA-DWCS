<?php

namespace App\Controller;

use App\Entity\Libro;
use App\Form\LibroType;
use App\Repository\LibroRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/libro')]
final class LibroController extends AbstractController
{
    #[Route(name: 'app_libro_index', methods: ['GET'])]
    public function index(Request $request, LibroRepository $libroRepository): Response
    {
        if ($locale = $request->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        }

        return $this->render('libro/index.html.twig', [
            'libros' => $libroRepository->findAll(),
        ]);
    }
    /**
     * Crea un nuevo libro mediante un formulario.
     * Ruta: /libro/new
     */
    #[Route('/new', name: 'app_libro_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($locale = $request->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        }

        $libro = new Libro();
        // Generación del formulario asociado a la entidad Libro
        $form = $this->createForm(LibroType::class, $libro);
        $form->handleRequest($request);
         // Si el formulario es válido, se guarda en la base de datos
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($libro);
            $entityManager->flush();

            return $this->redirectToRoute('app_libro_index');
        }

        return $this->render('libro/new.html.twig', [
            'libro' => $libro,
            'form' => $form,
        ]);
    }
    /**
     * Edita un libro existente.
     * Ruta: /libro/{id}/edit
     */
    #[Route('/{id}', name: 'app_libro_show', methods: ['GET'])]
    public function show(Request $request, Libro $libro): Response
    {
        if ($locale = $request->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        }

        return $this->render('libro/show.html.twig', [
            'libro' => $libro,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_libro_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Libro $libro, EntityManagerInterface $entityManager): Response
    {
        if ($locale = $request->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        }

        $form = $this->createForm(LibroType::class, $libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_libro_index');
        }

        return $this->render('libro/edit.html.twig', [
            'libro' => $libro,
            'form' => $form,
        ]);
    }
    /**
     * Elimina un libro de forma segura mediante token CSRF.
     * Ruta: /libro/{id}
     */
    #[Route('/{id}', name: 'app_libro_delete', methods: ['POST'])]
    public function delete(Request $request, Libro $libro, EntityManagerInterface $entityManager): Response
    {
        if ($locale = $request->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        }
        // Validación del token CSRF para evitar eliminaciones no autorizadas
        if ($this->isCsrfTokenValid('delete'.$libro->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($libro);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_libro_index');
    }
}
