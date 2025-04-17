<?php

namespace App\Form;

use App\Entity\Espace;
use App\Entity\Evenement;
use App\Enum\Categorie; // Ajoute cette ligne
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
            'attr' => ['placeholder' => 'Titre accrocheur...']
                ])
            ->add('description', TextareaType::class, [
                    'required' => false,
                    'attr' => [
                        'rows' => 5,
                        'placeholder' => 'Décrivez votre événement...'
                    ]
                ])
                ->add('date', DateType::class, [
                    'widget' => 'single_text',
                    'html5' => true,
                    'attr' => ['class' => 'js-datepicker']
                ])
                ->add('statut', ChoiceType::class, [
                    'choices' => [
                        'Actif' => 'actif',
                        'Inactif' => 'inactif',
                        'Brouillon' => 'brouillon'
                    ],
                    'expanded' => true,
                    'multiple' => false
                ])
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'Séminaire' => Categorie::SEMINAIRE,
                    'Conférence' => Categorie::CONFERENCE,
                    'Atelier' => Categorie::ATELIER
                ],
                'choice_value' => function (?Categorie $categorie) {
                    return $categorie ? $categorie->value : null;
                },
            ])
            ->add('image', FileType::class, [
                'label' => 'Image principale',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Seuls les JPG et PNG sont acceptés',
                    ])
                ],
                'attr' => ['accept' => 'image/*']
            ])
            ->add('prix', NumberType::class, [
                'scale' => 2,
                'attr' => [
                    'min' => 0,
                    'step' => '0.01',
                    'placeholder' => '0.00'
                ]
            ])
            ->add('espace', EntityType::class, [
                'class' => Espace::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionnez un lieu'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}