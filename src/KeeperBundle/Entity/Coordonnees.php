<?php

namespace KeeperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordonnees
 *
 * @ORM\Table(name="coordonnees")
 * @ORM\Entity(repositoryClass="KeeperBundle\Repository\CoordonneesRepository")
 */
class Coordonnees
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
     * @var int
     *
     * @ORM\Column(name="idTrajet", type="integer")
     */
    private $idTrajet;


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
     * @return Coordonnees
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
     * @return Coordonnees
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
     * Set idTrajet
     *
     * @param integer $idTrajet
     *
     * @return Coordonnees
     */
    public function setIdTrajet($idTrajet)
    {
        $this->idTrajet = $idTrajet;

        return $this;
    }

    /**
     * Get idTrajet
     *
     * @return int
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
    }
}

