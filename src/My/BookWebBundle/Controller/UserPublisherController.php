<?php

namespace My\BookWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\BookWebBundle\Entity\Publisher2;
use Symfony\Component\HttpFoundation\Request;
use My\BookWebBundle\Form\Type\Publisher2Type;

    /**
     * @Route("/user/publisher")
     * 
     */
class UserPublisherController extends Controller
{
    /**
    * @Route("/show/{id}")
    * 
    */
    public function showAction($id)
    {
        $Publisher= $this->getDoctrine()->getRepository('MyBookWebBundle:Publisher2')->findOneById($id);
        $dm=  $this->getDoctrine()->getManager();
        $dm->flush();
        return $this->render('Usershowpublisher.html.twig', array('Publisher' => $Publisher));
    }
     /**
     * @Route("/index")
     * 
     */
    public function indexAction()
    {
        $Publisherall= $this->getDoctrine()->getRepository('MyBookWebBundle:Publisher2')->findAll();
        return $this->render('Userindexpublisher.html.twig', array('Publisherall' => $Publisherall));
    }
}
