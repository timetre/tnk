<?php

namespace TNK\Bundle\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TNK\Bundle\BlogBundle\Entity\Categorie;
use TNK\Bundle\BlogBundle\Form\CategorieType;

/**
 * Categorie controller.
 *
 */
class CategorieController extends Controller
{

    /**
     * Lists all Categorie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TNKBlogBundle:Categorie')->findAll();

        return $this->render('TNKBlogBundle:Categorie:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Categorie entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Categorie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "Catégorie créée avec succès");

            return $this->redirect($this->generateUrl('categorie_show', array('id' => $entity->getId())));
        }

        return $this->render('TNKBlogBundle:Categorie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     */
    public function newAction()
    {
        $entity = new Categorie();
        $form   = $this->createCreateForm($entity);

        return $this->render('TNKBlogBundle:Categorie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Categorie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        return $this->render('TNKBlogBundle:Categorie:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('TNKBlogBundle:Categorie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
     * Edits an existing Categorie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "Catégorie modifiée avec succès");

            return $this->redirect($this->generateUrl('categorie_edit', array('id' => $id)));
        }

        return $this->render('TNKBlogBundle:Categorie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Categorie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $em->remove($entity);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', "Catégorie supprimée");

        return $this->redirect($this->generateUrl('categorie'));
    }

    /**
    * Creates a form to create a Categorie entity.
    *
    * @param Categorie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity, array(
            'action' => $this->generateUrl('categorie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
    * Creates a form to edit a Categorie entity.
    *
    * @param Categorie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity, array(
            'action' => $this->generateUrl('categorie_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
}
