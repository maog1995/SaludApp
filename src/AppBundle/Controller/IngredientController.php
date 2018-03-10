<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ingredient;
use AppBundle\Form\Type\IngredientType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IngredientController extends Controller
{
    /**
     * @Route("/alter/ingredient/{ingredient}", name="alter_ingredient")
     * @Route("/new/ingredient", name="new_ingredient")
     * @Security("has_role('ROLE_COLLABORATOR')")
     */
    public function formIngredientAction(Request $request, Ingredient $ingredient = null)
    {
        $em = $this->getDoctrine()->getManager();
        if (!$ingredient) {
            $ingredient = new Ingredient();
            $em->persist($ingredient);
        }
        $form = $this->createForm(IngredientType::class, $ingredient);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('homepage');
        }

        return $this->render('forms/form.html.twig', [
            'form' => $form->createView(),
            'item' => 'ingrediente'
        ]);
    }
}
