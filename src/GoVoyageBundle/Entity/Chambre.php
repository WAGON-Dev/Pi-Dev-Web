<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre", indexes={@ORM\Index(name="client_ch_fk", columns={"client_ch_fk"}), @ORM\Index(name="hotel_ch_fk", columns={"hotel_ch_fk"})})
 * @ORM\Entity
 */
class Chambre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chambre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_ch_fk", referencedColumnName="id_user")
     * })
     */
    private $clientChFk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hotel_ch_fk", referencedColumnName="id_user")
     * })
     */
    private $hotelChFk;



    /**
     * Get idChambre
     *
     * @return integer
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Chambre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Chambre
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set clientChFk
     *
     * @param \GoVoyageBundle\Entity\Users $clientChFk
     *
     * @return Chambre
     */
    public function setClientChFk(\GoVoyageBundle\Entity\Users $clientChFk = null)
    {
        $this->clientChFk = $clientChFk;

        return $this;
    }

    /**
     * Get clientChFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getClientChFk()
    {
        return $this->clientChFk;
    }

    /**
     * Set hotelChFk
     *
     * @param \GoVoyageBundle\Entity\Users $hotelChFk
     *
     * @return Chambre
     */
    public function setHotelChFk(\GoVoyageBundle\Entity\Users $hotelChFk = null)
    {
        $this->hotelChFk = $hotelChFk;

        return $this;
    }

    /**
     * Get hotelChFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getHotelChFk()
    {
        return $this->hotelChFk;
    }
}
