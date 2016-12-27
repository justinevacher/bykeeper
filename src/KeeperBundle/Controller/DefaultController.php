<?php

namespace KeeperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use KeeperBundle\Entity\Utilisateur;
use KeeperBundle\Entity\Boitier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
        return $this->render('KeeperBundle:Default:index.html.twig');
    }

    /**
     * @Route("/tableau-bord", name="tableau_de_bord")
     */
    public function tableauBordAction()
    {
        return $this->render('KeeperBundle:Default:tableau-bord.html.twig');
    }

    /**
     * @Route("/parametrage-alarme", name="parametrage_alarme")
     */
    public function parametrageAlarmeAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $userId = $this->getUser()->getId();
        $user = $userManager->findUserBy(array('id' => $userId));

        $form = $this->createFormBuilder($user)
        ->add('notifSMS', CheckboxType::class, array('label' => 'Par SMS',
           'required' =>false))
        ->add('notifEmail', CheckboxType::class, array('label' => 'Par MAIL',
            'required' =>false))
        ->add('notifZonesRisques', CheckboxType::class, array('label'=> "Lorsque j'active mon alarme dans une zone à risques",'required' =>false))
        ->add('submit', SubmitType::class, array('label' => 'Enregistrer'))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }

        return $this->render('KeeperBundle:Default:parametrage-alarme.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    /**
     * @Route("/reglage-capteur", name="reglage_capteur")
     */
    public function reglageCapteurAction(Request $request)
    {
        return $this->render('KeeperBundle:Default:reglage-capteur.html.twig');
    }

    /**
     * @Route("/retrouver-velo", name="retrouver_velo")
     */
    public function retrouverVeloAction()
    {
        return $this->render('KeeperBundle:Default:retrouver-velo.html.twig');
    }

    /**
     * @Route("/donnees-perso", name="donnees_perso")
     */
    public function donneesPersoAction(Request $request)
    {

        $userManager = $this->get('fos_user.user_manager');
        $userId = $this->getUser()->getId();
        $user = $userManager->findUserBy(array('id' => $userId));
        $numBoitier = $user->getNumBoitier();

        $form = $this->createFormBuilder($user)
        ->add('username', TextType::class, array('label' => 'Nom d\'Utilisateur',
            'disabled' => 'true'))
        ->add('numTel', TextType::class, array('label' => 'Numéro de téléphone portable'))
        ->add('email', EmailType::class)
        ->add('submit', SubmitType::class, array('label' => 'Enregistrer'))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }

        return $this->render('KeeperBundle:Default:donnees-perso.html.twig', array(
            'form' => $form->createView(),
            'numBoitier' => $numBoitier
            ));
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faqAction()
    {
        return $this->render('KeeperBundle:Default:faq.html.twig');
    }

    /**
     * @Route("/mentions-legales", name="mentions_legales")
     */
    public function mentionsLegalesAction()
    {
        return $this->render('KeeperBundle:Default:mentions.html.twig');
    }
}
