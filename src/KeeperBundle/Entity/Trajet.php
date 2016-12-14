<?php

namespace KeeperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet")
 * @ORM\Entity(repositoryClass="KeeperBundle\Repository\TrajetRepository")
 */
class Trajet
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesseMoyenne", type="integer")
     */
    private $vitesseMoyenne;

    /**
     * @var int
     *
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="time")
     */
    private $duree;

    /** 
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="trajets", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /** 
     * @ORM\OneToMany(targetEntity="Coordonnee", mappedBy="trajet", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $coordonnees;


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
     * @return Trajet
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Trajet
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Trajet
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set vitesseMoyenne
     *
     * @param integer $vitesseMoyenne
     *
     * @return Trajet
     */
    public function setVitesseMoyenne($vitesseMoyenne)
    {
        $this->vitesseMoyenne = $vitesseMoyenne;

        return $this;
    }

    /**
     * Get vitesseMoyenne
     *
     * @return int
     */
    public function getVitesseMoyenne()
    {
        return $this->vitesseMoyenne;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     *
     * @return Trajet
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set duree
     *
     * @param \DateTime $duree
     *
     * @return Trajet
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coordonnees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateur
     *
     * @param \KeeperBundle\Entity\Utilisateur $utilisateur
     *
     * @return Trajet
     */
    public function setUtilisateur(\KeeperBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \KeeperBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Add coordonnee
     *
     * @param \KeeperBundle\Entity\Coordonnee $coordonnee
     *
     * @return Trajet
     */
    public function addCoordonnee(\KeeperBundle\Entity\Coordonnee $coordonnee)
    {
        $this->coordonnees[] = $coordonnee;

        return $this;
    }

    /**
     * Remove coordonnee
     *
     * @param \KeeperBundle\Entity\Coordonnee $coordonnee
     */
    public function removeCoordonnee(\KeeperBundle\Entity\Coordonnee $coordonnee)
    {
        $this->coordonnees->removeElement($coordonnee);
    }

    /**
     * Get coordonnees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }
}
