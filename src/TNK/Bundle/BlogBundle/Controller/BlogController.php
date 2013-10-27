<?php

namespace TNK\Bundle\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TNK\Bundle\BlogBundle\Entity\Article;
use TNK\Bundle\BlogBundle\Form\ArticleType;

/**
 * Article controller.
 *
 */
class BlogController extends Controller
{
    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();
        if(!$id) {
            $entity = $em->getRepository('TNKBlogBundle:Article')->findLastPubLished();
        } else {
            $entity = $em->getRepository('TNKBlogBundle:Article')->find($id);
        }

        $archives = $em->getRepository('TNKBlogBundle:Article')->findAllOrdered();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        return $this->render('TNKBlogBundle:Blog:show.html.twig', array(
            'entity'        => $entity,
            'archives'      => $archives
        ));
    }

    public function showPresseAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();
        if(!$id) {
            $entity = $em->getRepository('TNKBlogBundle:Presse')->findLastPubLished();
        } else {
            $entity = $em->getRepository('TNKBlogBundle:Presse')->find($id);
        }

        $archives = $em->getRepository('TNKBlogBundle:Presse')->findAllOrdered();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Presse entity.');
        }

        return $this->render('TNKBlogBundle:Blog:showPresse.html.twig', array(
            'entity'        => $entity,
            'archives'      => $archives
        ));
    }

    
}
