<?php

namespace My\BookWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\BookWebBundle\Entity\Book2;
use Symfony\Component\HttpFoundation\Request;
use My\BookWebBundle\Form\Type\Book2Type;

    /**
     * @Route("/admin/book")
     * 
     */
class AdminBookController extends Controller
{
     /**
     * @Route("/new")
     * 
     */
    public function newAction(Request $request)
    {
        $Book= new Book2();
        $form =$this->createForm(new Book2Type(),$Book);
        $form->handleRequest($request);
        if($form->isValid()){
            $dm=$this->getDoctrine()->getManager();
            $dm->persist($Book);
            $dm->flush();    }
        return $this->render('Adminnewbook.html.twig', array('form' => $form->createView()));
    }
    
      /**
     * @Route("/remove/{id}")
     * 
     */
    public function removeAction($id)
    {
        $Book= $this->getDoctrine()->getRepository('MyBookWebBundle:Book2')->findOneById($id);
        $dm=  $this->getDoctrine()->getManager();
        $dm->remove($Book);
        $dm->flush();
        return $this->render('Adminremovebook.html.twig', array('id' => $id));
    }
      /**
     * @Route("/update/{id}")
     * 
     */
    public function updateAction(Request $request, $id)
    {
        $Book= $this->getDoctrine()->getRepository('MyBookWebBundle:Book2')->findOneById($id);
        
        $form =$this->createForm(new Book2Type(), $Book);
        $form->handleRequest($request);
        if($form->isValid()){
            $dm=$this->getDoctrine()->getManager();
            $dm->flush();    }
         return $this->render('Adminupdatebook.html.twig', array('form' => $form->createView()));
    }

}