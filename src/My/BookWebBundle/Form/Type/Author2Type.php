<?php

namespace My\BookWebBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class Author2Type extends AbstractType{
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('birthday','birthday')
            ->add('knownNickNames','textarea')
            //->add('books')
            ->add('isDead','choice',array('choices'=>array(
                    0=>'No',
                    1=>'Yes'    )));
            //->add('save','submit');
    }

    public function getName()
    {
        return 'author2';
    }
}
