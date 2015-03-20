<?php

namespace My\BookWebBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class Publisher2Type extends AbstractType{
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name');
           // ->add('books')
            //->add('save','submit');
    }

    public function getName()
    {
        return 'publisher2';
    }
}
