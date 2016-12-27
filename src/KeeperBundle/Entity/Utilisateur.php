<?php

namespace KeeperBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="KeeperBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
    private $vitesseMoyenneGlob = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="distanceGlob", type="integer")
     */
    private $distanceGlob = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifSMS", type="boolean")
     */
    private $notifSMS = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifEmail", type="boolean")
     */
    private $notifEmail = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifZonesRisques", type="boolean")
     */
    private $notifZonesRisques = false;

    /**
     * @var int
     *
     * @ORM\Column(name="numBoitier", type="integer", unique=true)
     */
    private $numBoitier;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatBoitier", type="boolean")
     */
    private $etatBoitier = false;

    /**
     * @var int
     *
     * @ORM\Column(name="sensibiliteDistanceBoitier", type="integer")
     */
    private $sensibiliteDistanceBoitier = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="sensibiliteVibrationBoitier", type="integer")
     */
    private $sensibiliteVibrationBoitier = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="optionBoitierVeloStatique", type="boolean")
     */
    private $optionBoitierVeloStatique = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="optionBoitierProximiteTel", type="boolean")
     */
    private $optionBoitierProximiteTel = false;

    /**
     * @var float
     *
     * @ORM\Column(name="latitudeBoitier", type="float")
     */
    private $latitudeBoitier = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="longitudeBoitier", type="float")
     */
    private $longitudeBoitier = 0;

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
     * @return integer
     */
    public function getNumBoitier()
    {
        return $this->numBoitier;
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
     * @return boolean
     */
    public function getEtatBoitier()
    {
        return $this->etatBoitier;
    }

    /**
     * Set sensibiliteDistanceBoitier
     *
     * @param integer $sensibiliteDistanceBoitier
     *
     * @return Utilisateur
     */
    public function setSensibiliteDistanceBoitier($sensibiliteDistanceBoitier)
    {
        $this->sensibiliteDistanceBoitier = $sensibiliteDistanceBoitier;

        return $this;
    }

    /**
     * Get sensibiliteDistanceBoitier
     *
     * @return integer
     */
    public function getSensibiliteDistanceBoitier()
    {
        return $this->sensibiliteDistanceBoitier;
    }

    /**
     * Set sensibiliteVibrationBoitier
     *
     * @param integer $sensibiliteVibrationBoitier
     *
     * @return Utilisateur
     */
    public function setSensibiliteVibrationBoitier($sensibiliteVibrationBoitier)
    {
        $this->sensibiliteVibrationBoitier = $sensibiliteVibrationBoitier;

        return $this;
    }

    /**
     * Get sensibiliteVibrationBoitier
     *
     * @return integer
     */
    public function getSensibiliteVibrationBoitier()
    {
        return $this->sensibiliteVibrationBoitier;
    }

    /**
     * Set optionBoitierVeloStatique
     *
     * @param boolean $optionBoitierVeloStatique
     *
     * @return Utilisateur
     */
    public function setOptionBoitierVeloStatique($optionBoitierVeloStatique)
    {
        $this->optionBoitierVeloStatique = $optionBoitierVeloStatique;

        return $this;
    }

    /**
     * Get optionBoitierVeloStatique
     *
     * @return boolean
     */
    public function getOptionBoitierVeloStatique()
    {
        return $this->optionBoitierVeloStatique;
    }

    /**
     * Set optionBoitierProximiteTel
     *
     * @param boolean $optionBoitierProximiteTel
     *
     * @return Utilisateur
     */
    public function setOptionBoitierProximiteTel($optionBoitierProximiteTel)
    {
        $this->optionBoitierProximiteTel = $optionBoitierProximiteTel;

        return $this;
    }

    /**
     * Get optionBoitierProximiteTel
     *
     * @return boolean
     */
    public function getOptionBoitierProximiteTel()
    {
        return $this->optionBoitierProximiteTel;
    }

    /**
     * Set latitudeBoitier
     *
     * @param float $latitudeBoitier
     *
     * @return Utilisateur
     */
    public function setLatitudeBoitier($latitudeBoitier)
    {
        $this->latitudeBoitier = $latitudeBoitier;

        return $this;
    }

    /**
     * Get latitudeBoitier
     *
     * @return float
     */
    public function getLatitudeBoitier()
    {
        return $this->latitudeBoitier;
    }

    /**
     * Set longitudeBoitier
     *
     * @param float $longitudeBoitier
     *
     * @return Utilisateur
     */
    public function setLongitudeBoitier($longitudeBoitier)
    {
        $this->longitudeBoitier = $longitudeBoitier;

        return $this;
    }

    /**
     * Get longitudeBoitier
     *
     * @return float
     */
    public function getLongitudeBoitier()
    {
        return $this->longitudeBoitier;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->trajets = new \Doctrine\Common\Collections\ArrayCollection();
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
