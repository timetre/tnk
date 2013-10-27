<?php

namespace TNK\Bundle\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TNK\Bundle\BlogBundle\Entity\Presse;
use TNK\Bundle\BlogBundle\Form\PresseType;

/**
 * Presse controller.
 *
 */
class PresseController extends Controller
{

    /**
     * Lists all Presse entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TNKBlogBundle:Presse')->findAll();

        return $this->render('TNKBlogBundle:Presse:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Presse entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Presse();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "Image ajoutée avec succès");

            return $this->redirect($this->generateUrl('presse_show', array('id' => $entity->getId())));
        }

        return $this->render('TNKBlogBundle:Presse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Presse entity.
     *
     */
    public function newAction()
    {
        $entity = new Presse();
        $form   = $this->createCreateForm($entity);

        return $this->render('TNKBlogBundle:Presse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Presse entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Presse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Presse entity.');
        }

        return $this->render('TNKBlogBundle:Presse:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing Presse entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Presse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Presse entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('TNKBlogBundle:Presse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
     * Edits an existing Presse entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Presse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Presse entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "Image modifiée avec succès");

            return $this->redirect($this->generateUrl('presse_edit', array('id' => $id)));
        }

        return $this->render('TNKBlogBundle:Presse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Presse entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TNKBlogBundle:Presse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Presse entity.');
        }

        $em->remove($entity);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', "Image supprimée avec succès");

        return $this->redirect($this->generateUrl('presse'));
    }

    /**
    * Creates a form to create a Presse entity.
    *
    * @param Presse $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Presse $entity)
    {
        $form = $this->createForm(new PresseType(), $entity, array(
            'action' => $this->generateUrl('presse_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
    * Creates a form to edit a Presse entity.
    *
    * @param Presse $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Presse $entity)
    {
        $form = $this->createForm(new PresseType(), $entity, array(
            'action' => $this->generateUrl('presse_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
}
