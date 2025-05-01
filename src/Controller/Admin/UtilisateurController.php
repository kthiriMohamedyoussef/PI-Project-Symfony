<?php

namespace App\Controller\Admin;
use App\Entity\Utilisateur;
use App\Entity\Adresse;
use App\Enum\Role;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Form\UtilisateurType;
use App\Repository\AdresseRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\LoginType;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
class UtilisateurController extends AbstractController
{
    private UserPasswordHasherInterface $passwordHasher;

    // Inject the password encoder into the controller constructor
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/admin/utilisateur', name: 'admin_utilisateur',methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateurs = $utilisateurRepository->findAll();

        return $this->render('/Admin/GestionUsers/users.html.twig', [
            'users' => $utilisateurs,
        ]);
    }

    #[Route('/admin/Create_utilisateur', name: 'admin_Create_utilisateur')]
    public function createUtilisateur(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger
    ): Response {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur, ['is_creation' => true]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode password
            $encodedPassword = $passwordHasher->hashPassword(
                $utilisateur, 
                $utilisateur->getMotdepasse()
            );
            $utilisateur->setMotdepasse($encodedPassword);

            // Handle address
            $adresse = $utilisateur->getAdresse();
            if ($adresse) {
                $entityManager->persist($adresse); // Persist the address
            }

            // Handle image upload
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageurl')->getData(); // Assuming you have a field named 'image' in the form

            if ($imageFile) {
                // Define the destination directory (relative to public folder)
                $destinationDir = $this->getParameter('kernel.project_dir') . '/public/utilisateur_images';

                // Ensure the destination directory exists
                $filesystem = new Filesystem();
                if (!$filesystem->exists($destinationDir)) {
                    $filesystem->mkdir($destinationDir); // Create the directory if it doesn't exist
                }

                // Create a unique filename for the image
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                // Define the destination file path
                $destinationFilePath = $destinationDir . '/' . $newFilename;
                try {
                    // Move the uploaded image to the destination directory
                    $imageFile->move($destinationDir, $newFilename);

                    // Set the new image URL for the database (relative URL for web access)
                    $utilisateur->setImageUrl('utilisateur_images/' . $newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Error while uploading the image.');
                }
            }

            // Persist the user
            $entityManager->persist($utilisateur);
            $entityManager->flush(); // Flush all changes to the database

            $this->addFlash('success', 'User created successfully!');
            return $this->redirectToRoute('admin_utilisateur');
        }

        return $this->render('Admin/GestionUsers/createuser.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/update_utilisateur/{id}', name: 'admin_update_utilisateur')]
    public function updateUtilisateur(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        UtilisateurRepository $utilisateurRepository,
        SluggerInterface $slugger
    ): Response {
        // Retrieve the user to be updated
        $utilisateur = $utilisateurRepository->find($id);
    
        if (!$utilisateur) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }
    
        // Create form for updating user
        $form = $this->createForm(UtilisateurType::class, $utilisateur, ['is_creation' => false]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Rehash password only if a new password is provided
            $plainPassword = $form->get('motdepasse')->getData();
            if (!empty($plainPassword)) {
                $encodedPassword = $passwordHasher->hashPassword($utilisateur, $plainPassword);
                $utilisateur->setMotdepasse($encodedPassword);
            }
    
            // Handle image upload
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageurl')->getData();
    
            if ($imageFile) {
                // Define the destination directory (relative to public folder)
                $destinationDir = $this->getParameter('kernel.project_dir') . '/public/utilisateur_images';
    
                // Ensure the destination directory exists
                $filesystem = new Filesystem();
                if (!$filesystem->exists($destinationDir)) {
                    $filesystem->mkdir($destinationDir); // Create the directory if it doesn't exist
                }
    
                // Create a unique filename for the image
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
    
                // Define the destination file path
                $destinationFilePath = $destinationDir . '/' . $newFilename;
                try {
                    // Move the uploaded image to the destination directory
                    $imageFile->move($destinationDir, $newFilename);
    
                    // Set the new image URL for the database (relative URL for web access)
                    $utilisateur->setImageurl('utilisateur_images/' . $newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Error while uploading the image.');
                }
            }
    
            // Handle address update
            $adresse = $utilisateur->getAdresse();
            if ($adresse) {
                $entityManager->persist($adresse); // Persist address if updated
            }
    
            // Persist the updated utilisateur entity
            $entityManager->persist($utilisateur);
            $entityManager->flush(); // Flush all changes to the database
    
            $this->addFlash('success', 'Utilisateur mis à jour avec succès!');
            return $this->redirectToRoute('admin_utilisateur');
        }
    
        // Render the form view
        return $this->render('Admin/GestionUsers/createuser.html.twig', [
            'form' => $form->createView(),
            'is_edit' => true, // optional if you want to customize title/button
        ]);
    }
    

#[Route('/admin/utilisateur/delete/{id}', name: 'admin_delete_utilisateur', methods: ['POST'])]
public function deleteUtilisateur(
    Utilisateur $utilisateur,
    Request $request,
    EntityManagerInterface $em
): Response {
    $token = $request->request->get('_token');

    if ($this->isCsrfTokenValid("delete-user-{$utilisateur->getId()}", $token)) {
        $em->remove($utilisateur);
        $em->flush();
        $this->addFlash('success', 'Utilisateur supprimé avec succès.');
    } else {
        $this->addFlash('danger', 'Jeton CSRF invalide.');
    }

    return $this->redirectToRoute('admin_utilisateur');
}
#[Route('/signup', name: 'app_signup')]
public function signup(
    Request $request,
    EntityManagerInterface $em,
    UserPasswordHasherInterface $hasher
): Response {
    $user = new Utilisateur();
    
    // Create the form with the 'is_signup' option
    $form = $this->createForm(UtilisateurType::class, $user, [
        'is_signup' => true,
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Handle password hashing
        $user->setMotdepasse(
            $hasher->hashPassword($user, $user->getMotdepasse())
        );

        // Handle address persistence
        $adresse = $user->getAdresse();
        if ($adresse) {
            $em->persist($adresse); // Persist the address if it's provided
        }
        $user->setRole(Role::PARTICIPANT); // Set the Role to the user

        // Persist the user
        $em->persist($user);
        $em->flush(); // Save both the address and user to the database

        // Optionally, add a success flash message
        $this->addFlash('success', 'Account created successfully!');

        // Redirect to login page after successful signup
        return $this->redirectToRoute('app_login');
    }

    // Render the signup page with the form view
    return $this->render('front/signup.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute('app_login');
    }
    #[Route('/login', name: 'app_login')]
public function login(Request $request, SessionInterface $session, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
{
    // Create the form
    $form = $this->createForm(LoginType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();

        // Find the user by email
        $user = $em->getRepository(Utilisateur::class)->findOneBy(['email' => $data['email']]);

        // Check if the user exists and the password is correct
        if ($user && $hasher->isPasswordValid($user, $data['motdepasse'])) {
            // Set the user session and redirect to homepage
            $session->set('user_id', $user->getId());
            return $this->render('front/home.html.twig', [
                'user' => $user,
            ]);
        }

        // Add a flash message if credentials are invalid
        $this->addFlash('error', 'Invalid email or password.');
    }

    // Render the login form
    return $this->render('front/login.html.twig', ['form' => $form->createView()]);
}

    
}


