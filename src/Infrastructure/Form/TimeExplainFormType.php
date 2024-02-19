<?php

namespace Infrastructure\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\FormBuilderInterface;

class TimeExplainFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setMethod('POST')
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'input'  => 'string'
            ])
            ->add('timezone', TimezoneType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Submit',
            ])
        ;
    }
}