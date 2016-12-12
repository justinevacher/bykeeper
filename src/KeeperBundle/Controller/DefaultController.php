<?php

namespace KeeperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
    public function parametrageAlarmeAction()
    {
        return $this->render('KeeperBundle:Default:parametrage-alarme.html.twig');
    }

    /**
     * @Route("/reglage-capteur", name="reglage_capteur")
     */
    public function reglageCapteurAction()
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
    public function donneesPersoAction()
    {
        return $this->render('KeeperBundle:Default:donnees-perso.html.twig');
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
