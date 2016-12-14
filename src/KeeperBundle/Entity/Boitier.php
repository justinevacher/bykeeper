<?php

namespace KeeperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boitier
 *
 * @ORM\Table(name="boitier")
 * @ORM\Entity(repositoryClass="KeeperBundle\Repository\BoitierRepository")
 */
class Boitier
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
    private $etatBoitier;

    /**
     * @var int
     *
     * @ORM\Column(name="sensibiliteDistance", type="integer")
     */
    private $sensibiliteDistance;

    /**
     * @var int
     *
     * @ORM\Column(name="sensibiliteVibration", type="integer")
     */
    private $sensibiliteVibration;

    /**
     * @var bool
     *
     * @ORM\Column(name="veloStatique", type="boolean")
     */
    private $veloStatique;

    /**
     * @var bool
     *
     * @ORM\Column(name="proximiteTel", type="boolean")
     */
    private $proximiteTel;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numBoitier
     *
     * @param integer $numBoitier
     *
     * @return Boitier
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
     * Set etatBoitier
     *
     * @param boolean $etatBoitier
     *
     * @return Boitier
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

    /**
     * Set sensibiliteDistance
     *
     * @param integer $sensibiliteDistance
     *
     * @return Boitier
     */
    public function setSensibiliteDistance($sensibiliteDistance)
    {
        $this->sensibiliteDistance = $sensibiliteDistance;

        return $this;
    }

    /**
     * Get sensibiliteDistance
     *
     * @return int
     */
    public function getSensibiliteDistance()
    {
        return $this->sensibiliteDistance;
    }

    /**
     * Set sensibiliteVibration
     *
     * @param integer $sensibiliteVibration
     *
     * @return Boitier
     */
    public function setSensibiliteVibration($sensibiliteVibration)
    {
        $this->sensibiliteVibration = $sensibiliteVibration;

        return $this;
    }

    /**
     * Get sensibiliteVibration
     *
     * @return int
     */
    public function getSensibiliteVibration()
    {
        return $this->sensibiliteVibration;
    }

    /**
     * Set veloStatique
     *
     * @param boolean $veloStatique
     *
     * @return Boitier
     */
    public function setVeloStatique($veloStatique)
    {
        $this->veloStatique = $veloStatique;

        return $this;
    }

    /**
     * Get veloStatique
     *
     * @return bool
     */
    public function getVeloStatique()
    {
        return $this->veloStatique;
    }

    /**
     * Set proximiteTel
     *
     * @param boolean $proximiteTel
     *
     * @return Boitier
     */
    public function setProximiteTel($proximiteTel)
    {
        $this->proximiteTel = $proximiteTel;

        return $this;
    }

    /**
     * Get proximiteTel
     *
     * @return bool
     */
    public function getProximiteTel()
    {
        return $this->proximiteTel;
    }
}
