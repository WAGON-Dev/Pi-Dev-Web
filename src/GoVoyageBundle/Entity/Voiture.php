<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="alv_vo_fk", columns={"alv_vo_fk"}), @ORM\Index(name="client_vo_fk", columns={"client_vo_fk"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var string
     *
     * @ORM\Column(name="regNo", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regno;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=30, nullable=false)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer", nullable=false)
     */
    private $rate;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alv_vo_fk", referencedColumnName="id_user")
     * })
     */
    private $alvVoFk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_vo_fk", referencedColumnName="id_user")
     * })
     */
    private $clientVoFk;



    /**
     * Get regno
     *
     * @return string
     */
    public function getRegno()
    {
        return $this->regno;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Voiture
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Voiture
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return Voiture
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Voiture
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Voiture
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set alvVoFk
     *
     * @param \GoVoyageBundle\Entity\Users $alvVoFk
     *
     * @return Voiture
     */
    public function setAlvVoFk(\GoVoyageBundle\Entity\Users $alvVoFk = null)
    {
        $this->alvVoFk = $alvVoFk;

        return $this;
    }

    /**
     * Get alvVoFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getAlvVoFk()
    {
        return $this->alvVoFk;
    }

    /**
     * Set clientVoFk
     *
     * @param \GoVoyageBundle\Entity\Users $clientVoFk
     *
     * @return Voiture
     */
    public function setClientVoFk(\GoVoyageBundle\Entity\Users $clientVoFk = null)
    {
        $this->clientVoFk = $clientVoFk;

        return $this;
    }

    /**
     * Get clientVoFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getClientVoFk()
    {
        return $this->clientVoFk;
    }
}
