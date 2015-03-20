<?php

namespace My\BookWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\BookWebBundle\Entity\Author2;
use Symfony\Component\HttpFoundation\Request;
use My\BookWebBundle\Form\Type\Author2Type;

    /**
     * @Route("/admin/author")
     * 
     */
class AdminAuthorController extends Controller
{
    /**
     * @Route("/new")
     * 
     */
    public function newAction(Request $request)
    {
        $Author= new Author2();
        $form =$this->createForm(new Author2Type(),$Author);
        $form->handleRequest($request);
        if($form->isValid()){
            $dm=$this->getDoctrine()->getManager();
            $dm->persist($Author);
            $dm->flush();    }
        return $this->render('Adminnewauthor.html.twig', array('form' => $form->createView()));
    }
    
     /**
     * @Route("/remove/{id}")
     * 
     */
    public function removeAction($id)
    {
        $Author= $this->getDoctrine()->getRepository('MyBookWebBundle:Author2')->findOneById($id);
        $dm=  $this->getDoctrine()->getManager();
        $dm->remove($Author);
        $dm->flush();
        return $this->render('Adminremoveauthor.html.twig', array('id' => $id));
    }
     /**
     * @Route("/update/{id}")
     * 
     */
    public function updateAction(Request $request, $id)
    {
        $Author= $this->getDoctrine()->getRepository('MyBookWebBundle:Author2')->findOneById($id);
        
        $form =$this->createForm(new Author2Type(), $Author);
        $form->handleRequest($request);
        if($form->isValid()){
            $dm=$this->getDoctrine()->getManager();
            $dm->flush();    }
         return $this->render('Adminupdateauthor.html.twig', array('form' => $form->createView()));
    }
}
