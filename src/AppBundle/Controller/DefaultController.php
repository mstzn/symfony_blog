<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Enquiry;
use AppBundle\Form\EnquiryType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getEntityManager();

        $blogs = $entityManager->getRepository('AppBundle:Blog')->getLatestBlogs();

        return $this->render('default/index.html.twig', array(
            'blogs' => $blogs
        ));

    }

    public function loginAction() {

        return $this->render('default/login.html.twig', array());
    }

    public function blogAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('AppBundle:Blog')->findOneBy(array('slug' => $slug));

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $this->render('default/blog.html.twig', array(
            'blog'      => $blog,
        ));
    }
}
