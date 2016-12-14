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
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

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
     * @var int
     *
     * @ORM\Column(name="numTel", type="integer")
     */
    private $numTel;

    /**
     * @var int
     *
     * @ORM\Column(name="numBoitier", type="integer")
     */
    private $numBoitier;

    /**
     * @var int
     *
     * @ORM\Column(name="vitMoyGlob", type="integer", nullable=true)
     */
    private $vitMoyGlob;

    /**
     * @var int
     *
     * @ORM\Column(name="distanceGlob", type="integer", nullable=true)
     */
    private $distanceGlob;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifSMS", type="boolean", nullable=true)
     */
    private $notifSMS;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifMail", type="boolean", nullable=true)
     */
    private $notifMail;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifZonesRisque", type="boolean", nullable=true)
     */
    private $notifZonesRisque;

    /**
     * @var bool
     *
     * @ORM\Column(name="onOffTelProx", type="boolean", nullable=true)
     */
    private $onOffTelProx;

    /**
     * @var bool
     *
     * @ORM\Column(name="onOffVeloStatic", type="boolean", nullable=true)
     */
    private $onOffVeloStatic;

    /**
     * @var int
     *
     * @ORM\Column(name="sensiVibration", type="integer", nullable=true)
     */
    private $sensiVibration;

    /**
     * @var int
     *
     * @ORM\Column(name="sensiDistance", type="integer", nullable=true)
     */
    private $sensiDistance;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatBoitier", type="boolean", nullable=true)
     */
    private $etatBoitier;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
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
     * Set numBoitier
     *
     * @param integer $numBoitier
     *
     * @return Utilisateur
     */
    public function setNumBoitier($numBoitier)
    {
        $this->numBoitier = $numBoitier;

        return $this;
    }

    /**
     * Get numBoitier
     *
     * @return int
     */
    public function getNumBoitier()
    {
        return $this->numBoitier;
    }

    /**
     * Set vitMoyGlob
     *
     * @param integer $vitMoyGlob
     *
     * @return Utilisateur
     */
    public function setVitMoyGlob($vitMoyGlob)
    {
        $this->vitMoyGlob = $vitMoyGlob;

        return $this;
    }

    /**
     * Get vitMoyGlob
     *
     * @return int
     */
    public function getVitMoyGlob()
    {
        return $this->vitMoyGlob;
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
     * Set notifMail
     *
     * @param boolean $notifMail
     *
     * @return Utilisateur
     */
    public function setNotifMail($notifMail)
    {
        $this->notifMail = $notifMail;

        return $this;
    }

    /**
     * Get notifMail
     *
     * @return bool
     */
    public function getNotifMail()
    {
        return $this->notifMail;
    }

    /**
     * Set notifZonesRisque
     *
     * @param boolean $notifZonesRisque
     *
     * @return Utilisateur
     */
    public function setNotifZonesRisque($notifZonesRisque)
    {
        $this->notifZonesRisque = $notifZonesRisque;

        return $this;
    }

    /**
     * Get notifZonesRisque
     *
     * @return bool
     */
    public function getNotifZonesRisque()
    {
        return $this->notifZonesRisque;
    }

    /**
     * Set onOffTelProx
     *
     * @param boolean $onOffTelProx
     *
     * @return Utilisateur
     */
    public function setOnOffTelProx($onOffTelProx)
    {
        $this->onOffTelProx = $onOffTelProx;

        return $this;
    }

    /**
     * Get onOffTelProx
     *
     * @return bool
     */
    public function getOnOffTelProx()
    {
        return $this->onOffTelProx;
    }

    /**
     * Set onOffVeloStatic
     *
     * @param boolean $onOffVeloStatic
     *
     * @return Utilisateur
     */
    public function setOnOffVeloStatic($onOffVeloStatic)
    {
        $this->onOffVeloStatic = $onOffVeloStatic;

        return $this;
    }

    /**
     * Get onOffVeloStatic
     *
     * @return bool
     */
    public function getOnOffVeloStatic()
    {
        return $this->onOffVeloStatic;
    }

    /**
     * Set sensiVibration
     *
     * @param integer $sensiVibration
     *
     * @return Utilisateur
     */
    public function setSensiVibration($sensiVibration)
    {
        $this->sensiVibration = $sensiVibration;

        return $this;
    }

    /**
     * Get sensiVibration
     *
     * @return int
     */
    public function getSensiVibration()
    {
        return $this->sensiVibration;
    }

    /**
     * Set sensiDistance
     *
     * @param integer $sensiDistance
     *
     * @return Utilisateur
     */
    public function setSensiDistance($sensiDistance)
    {
        $this->sensiDistance = $sensiDistance;

        return $this;
    }

    /**
     * Get sensiDistance
     *
     * @return int
     */
    public function getSensiDistance()
    {
        return $this->sensiDistance;
    }

    /**
     * Set etatBoitier
     *
     * @param boolean $etatBoitier
     *
     * @return Utilisateur
     */
    public function setEtatBoitier($etatBoitier)
    {
        $this->etatBoitier = $etatBoitier;

        return $this;
    }

    /**
     * Get etatBoitier
     *
     * @return bool
     */
    public function getEtatBoitier()
    {
        return $this->etatBoitier;
    }
}

