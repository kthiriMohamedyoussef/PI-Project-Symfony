<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Entity\Adresse;
use App\Enum\Role;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('motdepasse', PasswordType::class, [
                'required' => $options['is_creation'] ?? true,
                'mapped' => true,
                'empty_data' => '',
            ])
            ->add('adresse', AdresseType::class)
            ->add('tel', TextType::class)
            ->add('email', EmailType::class, [
                'required' => false,
            ]);

        // Only show role field for admin-created users (not for signup)
        if (!($options['is_signup'] ?? false)) {
            $builder->add('role', ChoiceType::class, [
                'choices' => Role::cases(),
                'choice_label' => fn(Role $role) => $role->value,
                'choice_value' => fn(?Role $role) => $role?->value,
            ]);
        }

        // Only show image upload for non-signup forms
        if (!($options['is_signup'] ?? false)) {
            $builder->add('imageurl', FileType::class, [
                'label' => 'Upload your profile image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPEG, PNG, GIF)',
                    ])
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'is_creation' => false,
            'is_signup' => false, // Default to admin form (shows role field)
        ]);
    }
}