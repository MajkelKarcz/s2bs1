<?php

namespace My\BookWebBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class Book2Type extends AbstractType{
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description','textarea')
            ->add('year','birthday')
            ->add('version')
            ->add('isbn')
            ->add('publisher','entity',array(
                    'class'=>'MyBookWebBundle:Publisher2',
                    'property'=>'name',
                    'required'=>TRUE))
            ->add('author','entity',array(
                    'class'=>'MyBookWebBundle:Author2',
                    'property'=>'lastName',
                    'required'=>TRUE));
           // ->add('save','submit');
    }

    public function getName()
    {
        return 'book2';
    }
}
