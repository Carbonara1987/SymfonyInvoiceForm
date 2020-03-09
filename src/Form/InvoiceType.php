<?php

namespace App\Form;

use App\Entity\InvoiceRows;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('InvoiceID',IntegerType::class,['label' => 'Invoice Number'])
            ->add('Description')
            ->add('Quantity')
            ->add('Value')
            ->add('VAT')
            ->add('TotalValue')
            ->add('Save',SubmitType::class,['label' => 'Create invoice',
            'attr' => [
                'style' => 'background-color: red;'
            ]
            ])
            ->add('Reset',ResetType::class,['label' => 'Reset'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InvoiceRows::class,
        ]);
    }
}
