<?php
namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use App\Form\AdresseType;

class ProfileUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('motdepasse', PasswordType::class, [
                'required' => false, // Allow the user to leave password empty
                'mapped' => true,
                'empty_data' => '',
            ])
            ->add('adresse', AdresseType::class)
            ->add('tel', TextType::class)
            ->add('email', EmailType::class, [
                'required' => false,
            ]);

        // Profile image field (optional)
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

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
