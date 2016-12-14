<?php

namespace KeeperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="KeeperBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string", length=255)
     */
    private $numTel;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesseMoyenneGlob", type="integer")
     */
    private $vitesseMoyenneGlob;

    /**
     * @var int
     *
     * @ORM\Column(name="distanceGlob", type="integer")
     */
    private $distanceGlob;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifSMS", type="boolean")
     */
    private $notifSMS;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifEmail", type="boolean")
     */
    private $notifEmail;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifZonesRisques", type="boolean")
     */
    private $notifZonesRisques;

    /** 
     * @ORM\OneToOne(targetEntity="Boitier", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $boitier;

    /** 
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $trajets;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Utilisateur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set numTel
     *
     * @param integer $numTel
     *
     * @return Utilisateur
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return int
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set vitesseMoyenneGlob
     *
     * @param integer $vitesseMoyenneGlob
     *
     * @return Utilisateur
     */
    public function setVitesseMoyenneGlob($vitesseMoyenneGlob)
    {
        $this->vitesseMoyenneGlob = $vitesseMoyenneGlob;

        return $this;
    }

    /**
     * Get vitesseMoyenneGlob
     *
     * @return int
     */
    public function getVitesseMoyenneGlob()
    {
        return $this->vitesseMoyenneGlob;
    }

    /**
     * Set distanceGlob
     *
     * @param integer $distanceGlob
     *
     * @return Utilisateur
     */
    public function setDistanceGlob($distanceGlob)
    {
        $this->distanceGlob = $distanceGlob;

        return $this;
    }

    /**
     * Get distanceGlob
     *
     * @return int
     */
    public function getDistanceGlob()
    {
        return $this->distanceGlob;
    }

    /**
     * Set notifSMS
     *
     * @param boolean $notifSMS
     *
     * @return Utilisateur
     */
    public function setNotifSMS($notifSMS)
    {
        $this->notifSMS = $notifSMS;

        return $this;
    }

    /**
     * Get notifSMS
     *
     * @return bool
     */
    public function getNotifSMS()
    {
        return $this->notifSMS;
    }

    /**
     * Set notifEmail
     *
     * @param boolean $notifEmail
     *
     * @return Utilisateur
     */
    public function setNotifEmail($notifEmail)
    {
        $this->notifEmail = $notifEmail;

        return $this;
    }

    /**
     * Get notifEmail
     *
     * @return bool
     */
    public function getNotifEmail()
    {
        return $this->notifEmail;
    }

    /**
     * Set notifZonesRisques
     *
     * @param boolean $notifZonesRisques
     *
     * @return Utilisateur
     */
    public function setNotifZonesRisques($notifZonesRisques)
    {
        $this->notifZonesRisques = $notifZonesRisques;

        return $this;
    }

    /**
     * Get notifZonesRisques
     *
     * @return bool
     */
    public function getNotifZonesRisques()
    {
        return $this->notifZonesRisques;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trajets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set boitier
     *
     * @param \KeeperBundle\Entity\Boitier $boitier
     *
     * @return Utilisateur
     */
    public function setBoitier(\KeeperBundle\Entity\Boitier $boitier)
    {
        $this->boitier = $boitier;

        return $this;
    }

    /**
     * Get boitier
     *
     * @return \KeeperBundle\Entity\Boitier
     */
    public function getBoitier()
    {
        return $this->boitier;
    }

    /**
     * Add trajet
     *
     * @param \KeeperBundle\Entity\Trajet $trajet
     *
     * @return Utilisateur
     */
    public function addTrajet(\KeeperBundle\Entity\Trajet $trajet)
    {
        $this->trajets[] = $trajet;

        return $this;
    }

    /**
     * Remove trajet
     *
     * @param \KeeperBundle\Entity\Trajet $trajet
     */
    public function removeTrajet(\KeeperBundle\Entity\Trajet $trajet)
    {
        $this->trajets->removeElement($trajet);
    }

    /**
     * Get trajets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrajets()
    {
        return $this->trajets;
    }
}
