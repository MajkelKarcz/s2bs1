<?php

namespace My\BookWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\BookWebBundle\Entity\Book2;
use Symfony\Component\HttpFoundation\Request;
use My\BookWebBundle\Form\Type\Book2Type;

    /**
     * @Route("/user/book")
     * 
     */
class UserBookController extends Controller
{
       /**
     * @Route("/show/{id}")
     * 
     */
    public function showAction($id)
    {
        $Book= $this->getDoctrine()->getRepository('MyBookWebBundle:Book2')->findOneById($id);
        $dm=  $this->getDoctrine()->getManager();
        $dm->flush();
        return $this->render('Usershowbook.html.twig', array('Book' => $Book));
    }
    
     /**
     * @Route("/index")
     * 
     */
    public function indexAction()
    {
        $Bookall= $this->getDoctrine()->getRepository('MyBookWebBundle:Book2')->findAll();
        return $this->render('Userindexbook.html.twig', array('Bookall' => $Bookall));
    }

}
