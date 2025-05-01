<?php

namespace App\Form;

use App\Entity\Materiel;
use App\Entity\TypeMateriel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints as Assert;

class MaterielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du matériel',
                'attr' => ['class' => 'form-control',
                'placeholder' => 'Ex: Projecteur HD',
                'minlength' => '2',
                'maxlength' => '255',
                'required' => false, // If it's optional
                'empty_data' => '', // Default value if no data is submitted

            ],

                'constraints' => [
                    new Assert\NotBlank(['message' => 'Nom du matériel est requis.']),
                    new Assert\Length([
                       'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.'
                    ]),
                    new Assert\Regex([
                        'pattern' => "/^[a-zA-Z0-9\s\-éèêëàâäôöûüçÉÈÊËÀÂÄÔÖÛÜÇ]+$/",
                        'message' => 'Seuls les lettres, chiffres, espaces et tirets sont autorisés.'
                    ])
                ],
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix (TND)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 199.99',
                    'step' => '0.01',
                    'min' => '0',
                    'max' => '10000'
                ],
                'html5' => true,
                'constraints' => [
                    
                    new Assert\Type(['type' => 'numeric', 'message' => 'Le prix doit être un nombre.']),
                    new Assert\Positive(['message' => 'Le prix doit être positif.']),
                    new Assert\NotBlank(['message' => 'Le prix est requis.']),
                    new Assert\LessThanOrEqual([
                        'value' => 10000,
                        'message' => 'Le prix ne peut pas dépasser {{ value }} TND.'
                    
                    ])
                ],
            ])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'DISPONIBLE' => 'DISPONIBLE',
                    'INDISPONIBLE' => 'INDISPONIBLE'
                ],
                'label' => 'État du matériel',
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Sélectionnez un état',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'état est requis.']),
                    new Assert\Choice([
                        'choices' => ['DISPONIBLE', 'INDISPONIBLE'],
                        'message' => 'Choisissez un état valide.'
                    ])
                ],
            ])
            ->add('typeMaterielId', EntityType::class, [
                'class' => TypeMateriel::class,
                'choice_label' => 'nomm',
                'label' => 'Type de matériel',
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Sélectionnez un type',
                'constraints' => [
                    new Assert\NotNull(['message' => 'Le type de matériel est requis.'])
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image du matériel',
                'required' => false,
                'mapped' => false, // This field is not mapped to the entity
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG ou WEBP).',
                        'maxSizeMessage' => 'L\'image ne peut pas dépasser {{ limit }} {{ suffix }}.'
                    ]),
                ],
            ])
            ->add('imagePath', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => ['class' => 'd-none'], // Hide this field
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materiel::class,
            'attr' => ['novalidate' => 'novalidate'] // HTML5 validation
        ]);
    }
}