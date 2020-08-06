<?php

namespace App\Controller;

use App\Entity\ClassicCars;
use App\Form\ClassicCarsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/classic/cars")
 */
class ClassicCarsController extends AbstractController
{
    /**
     * @Route("/", name="classic_cars_index", methods={"GET"})
     */
    public function index(): Response
    {
        $classicCars = $this->getDoctrine()
            ->getRepository(ClassicCars::class)
            ->findAll();
            
        return $this->render('classic_cars/index.html.twig', [
            'classic_cars' => $classicCars,
        ]);
    }

    /**
     * @Route("/new", name="classic_cars_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $classicCar = new ClassicCars();
        $form = $this->createForm(ClassicCarsType::class, $classicCar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($classicCar);
            $entityManager->flush();

            return $this->redirectToRoute('classic_cars_index');
        }

        return $this->render('classic_cars/new.html.twig', [
            'classic_car' => $classicCar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{clsCarsId}", name="classic_cars_show", methods={"GET"})
     */
    public function show(ClassicCars $classicCar): Response
    {
        return $this->render('classic_cars/show.html.twig', [
            'classic_car' => $classicCar,
        ]);
    }

    /**
     * @Route("/{clsCarsId}/edit", name="classic_cars_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ClassicCars $classicCar): Response
    {
        $form = $this->createForm(ClassicCarsType::class, $classicCar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('classic_cars_index');
        }

        return $this->render('classic_cars/edit.html.twig', [
            'classic_car' => $classicCar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{clsCarsId}", name="classic_cars_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ClassicCars $classicCar): Response
    {
        if ($this->isCsrfTokenValid('delete'.$classicCar->getClsCarsId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($classicCar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('classic_cars_index');
    }
}
