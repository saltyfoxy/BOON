<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\FormRegistrationType;
use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\TextType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //    $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }

    /**
     * @Route("/inscription", name="registration")
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param ObjectManager $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function registration(
        \Symfony\Component\HttpFoundation\Request $request,
        ObjectManager $manager,
        UserPasswordEncoderInterface $encoder
    ): Response
    {

        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('name', TextareaType::class, array(
                'label' => 'name',
                'attr' => array(
                    'placeholder' => 'Enter your username here',
                    'class' => 'input-registration email')))
            ->add('email', EmailType::class, array(
                'label' => 'email',
                'attr' => array(
                    'placeholder' => 'Enter your mail adress here',
                    'class' => 'input-registration email')))
            ->add('password', PasswordType::class, array(
                'label' => 'email',
                'attr' => array(
                    'placeholder' => 'Enter your password',
                    'class' => 'input-registration password-check')))
            ->add('confirm_password', PasswordType::class, array(
                'label' => 'email',
                'attr' => array(
                    'placeholder' => 'Confirm your password',
                    'class' => 'input-registration password')))
            // ->add('save',ButtonType::class, array(
            //   'label' => 'button'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();


            return $this->redirectToRoute('app_login');

        }

        $this->addFlash('fail', 'Something is wrong, try again');

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @return Response
     */
    public function navRegistration(FormBuilder $builder, array $options): Response
    {

        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('email', array(
                'label' => 'email',
                'attr' => array(
                    'class' => 'input-registration')))
            ->add('password', PasswordType::class, array(
                'label' => 'password',
                'attr' => array(
                    'class' => 'input-registration')))
            ->add('confirm_password', PasswordType::class, array(
                'label' => 'password_confirmation',
                'attr' => array(
                    'class' => 'input-registration')))
            ->getForm();


        return $this->render('security/registration_form.html.twig', ['form' => $form->createView()]);
    }
}
