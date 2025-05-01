<?php

namespace App\Form;

use App\Entity\TypeMateriel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TypeMaterielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomm', TextType::class, [
                'label' => 'Nom du type',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Projecteur HD',
                    'minlength' => '2',
                    'maxlength' => '255'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'minlength' => '10',
                    'maxlength' => '255'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TypeMateriel::class,
        ]);
    }
}