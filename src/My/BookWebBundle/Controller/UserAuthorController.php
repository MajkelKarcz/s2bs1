<?php

namespace My\BookWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\BookWebBundle\Entity\Author2;
use Symfony\Component\HttpFoundation\Request;
use My\BookWebBundle\Form\Type\Author2Type;

    /**
     * @Route("/user/author")
     * 
     */
class UserAuthorController extends Controller
{
       /**
     * @Route("/show/{id}")
     * 
     */
    public function showAction($id)
    {
        $Author= $this->getDoctrine()->getRepository('MyBookWebBundle:Author2')->findOneById($id);
        $dm=  $this->getDoctrine()->getManager();
        $dm->flush();
        return $this->render('Usershowauthor.html.twig', array('Author' => $Author));
    }
     /**
     * @Route("/index")
     * 
     */
    public function indexAction()
    {
        $Authorall= $this->getDoctrine()->getRepository('MyBookWebBundle:Author2')->findAll();
        return $this->render('Userindexauthor.html.twig', array('Authorall' => $Authorall));
    }

}
