<?php
/**
 * Created by PhpStorm.
 * User: Panda
 * Date: 21.12.2016
 * Time: 7:33
 */

namespace Panda\ExampleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AddPost
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text')
            ->add('Date', null, array('widget' => 'single_text'))
            ->add('save', SubmitType::class)
        ;
    }
}