<?php
<<<<<<< HEAD
namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller {
    /**
     * @Route("/inscription",name="inscription")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            //on active par défaut
            $user->setIsActive(true);
            //$user->addRole("ROLE_ADMIN");
            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $this->addFlash('success', 'Votre compte à bien été enregistré.');
            return $this->redirectToRoute('login');
        }
        return $this->render('security/inscription.html.twig', ['form' => $form->createView(), 'mainNavRegistration' => true, 'title' => 'Inscription']);
    }
    /**
     * @Route("/inscriptionBerger",name="inscriptionBerger")
     */
    public function registerBergerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            //on active par défaut
            $user->setIsActive(true);
            $user->addRole("ROLE_BERGER");
            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $this->addFlash('success', 'Votre compte à bien été enregistré.');
            return $this->redirectToRoute('login');
        }
        return $this->render('security/inscription.html.twig', ['form' => $form->createView(), 'mainNavRegistration' => true, 'title' => 'Inscription']);
    }
    /**
     * @Route("/inscriptionAdmin",name="inscriptionAdmin")
     */
    public function registerAdminAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        // 1) build the form
        $user = new User();
=======

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/security", name="security")
     */
    public function index()
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }
    /**
     * @Route("/inscription")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        // 1) build the form
        $user = new Utilisateurs();
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
<<<<<<< HEAD
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            //on active par défaut
            $user->setIsActive(true);
            $user->addRole("ROLE_SUPER_ADMIN");
            
=======
            $password = $user->getPlainPassword();
            $user->setPassword($password);
            //on active par défaut
            //$user->setIsActive(true);
            //
       /// $user->addRole(roles);
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $this->addFlash('success', 'Votre compte à bien été enregistré.');
<<<<<<< HEAD
            return $this->redirectToRoute('login');
        }
        return $this->render('security/inscription.html.twig', ['form' => $form->createView(), 'mainNavRegistration' => true, 'title' => 'Inscription']);
    }
     /**
=======
            //return $this->redirectToRoute('login');
        }
        return $this->render('security/register.html.twig', ['form' => $form->createView(), 'mainNavRegistration' => true, 'title' => 'Inscription']);
    }
/**
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils) {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        //
        $form = $this->get('form.factory')
                ->createNamedBuilder(null)
                ->add('_username', null, ['label' => 'Email'])
                ->add('_password', \Symfony\Component\Form\Extension\Core\Type\PasswordType::class, ['label' => 'Mot de passe'])
<<<<<<< HEAD
                ->add('connexion', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, ['label' => 'Connexion', 'attr' => ['class' => 'green darken-4']])
                ->getForm();
//return $this->redirectToRoute('membre');

=======
                ->add('ok', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, ['label' => 'Ok', 'attr' => ['class' => 'btn-primary btn-block']])
                ->getForm();
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
        return $this->render('security/login.html.twig', [
                    'mainNavLogin' => true, 'title' => 'Connexion',
                    //
                    'form' => $form->createView(),
                    'last_username' => $lastUsername,
                    'error' => $error,
        ]);
    }
<<<<<<< HEAD



=======
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
}
