<?php

namespace KeeperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordonnee
 *
 * @ORM\Table(name="coordonnee")
 * @ORM\Entity(repositoryClass="KeeperBundle\Repository\CoordonneeRepository")
 */
class Coordonnee
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
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /** 
     * @ORM\ManyToOne(targetEntity="Trajet", inversedBy="coordonnees", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $trajet;


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
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Coordonnee
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Coordonnee
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set trajet
     *
     * @param \KeeperBundle\Entity\Trajet $trajet
     *
     * @return Coordonnee
     */
    public function setTrajet(\KeeperBundle\Entity\Trajet $trajet)
    {
        $this->trajet = $trajet;

        return $this;
    }

    /**
     * Get trajet
     *
     * @return \KeeperBundle\Entity\Trajet
     */
    public function getTrajet()
    {
        return $this->trajet;
    }
}
