<?php

namespace My\BookWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\BookWebBundle\Entity\Publisher2;
use Symfony\Component\HttpFoundation\Request;
use My\BookWebBundle\Form\Type\Publisher2Type;

    /**
     * @Route("/admin/publisher")
     * 
     */
class AdminPublisherController extends Controller
{
    /**
     * @Route("/new")
     * 
     */
    public function newAction(Request $request)
    {
        $Publisher= new Publisher2();
        $form =$this->createForm(new Publisher2Type(),$Publisher);
        $form->handleRequest($request);
        if($form->isValid()){
            $dm=$this->getDoctrine()->getManager();
            $dm->persist($Publisher);
            $dm->flush();    }
        return $this->render('Adminnewpublisher.html.twig', array('form' => $form->createView()));
    }
     /**
     * @Route("/remove/{id}")
     * 
     */
    public function removeAction($id)
    {
        $Publisher= $this->getDoctrine()->getRepository('MyBookWebBundle:Publisher2')->findOneById($id);
        $dm=  $this->getDoctrine()->getManager();
        $dm->remove($Publisher);
        $dm->flush();
        return $this->render('Adminremovepublisher.html.twig', array('id' => $id));
    }
     /**
     * @Route("/update/{id}")
     * 
     */
    public function updateAction(Request $request, $id)
    {
        $Publisher= $this->getDoctrine()->getRepository('MyBookWebBundle:Publisher2')->findOneById($id);
        
        $form =$this->createForm(new Publisher2Type(), $Publisher);
        $form->handleRequest($request);
        if($form->isValid()){
            $dm=$this->getDoctrine()->getManager();
            $dm->flush();    }
         return $this->render('Adminupdatepublisher.html.twig', array('form' => $form->createView()));
    }
}
