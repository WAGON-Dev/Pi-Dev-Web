<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyagepersonalise
 *
 * @ORM\Table(name="voyagepersonalise", indexes={@ORM\Index(name="hotel_fk", columns={"hotel_fk"}), @ORM\Index(name="client_vp_fk", columns={"client_vp_fk"}), @ORM\Index(name="event1_fk", columns={"event1_fk"}), @ORM\Index(name="id_guide_fk", columns={"id_guide_fk"})})
 * @ORM\Entity
 */
class Voyagepersonalise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_depart", type="string", length=20, nullable=true)
     */
    private $villeDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_arrive", type="string", length=20, nullable=true)
     */
    private $villeArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=true)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrive", type="date", nullable=true)
     */
    private $dateArrive;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_participant", type="integer", nullable=true)
     */
    private $nbrParticipant;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hotel_fk", referencedColumnName="id_user")
     * })
     */
    private $hotelFk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_vp_fk", referencedColumnName="id_user")
     * })
     */
    private $clientVpFk;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event1_fk", referencedColumnName="id_evenement")
     * })
     */
    private $event1Fk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_guide_fk", referencedColumnName="id_user")
     * })
     */
    private $idGuideFk;



    /**
     * Get idVp
     *
     * @return integer
     */
    public function getIdVp()
    {
        return $this->idVp;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Voyagepersonalise
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
     * Set villeDepart
     *
     * @param string $villeDepart
     *
     * @return Voyagepersonalise
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    /**
     * Get villeDepart
     *
     * @return string
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * Set villeArrive
     *
     * @param string $villeArrive
     *
     * @return Voyagepersonalise
     */
    public function setVilleArrive($villeArrive)
    {
        $this->villeArrive = $villeArrive;

        return $this;
    }

    /**
     * Get villeArrive
     *
     * @return string
     */
    public function getVilleArrive()
    {
        return $this->villeArrive;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Voyagepersonalise
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     *
     * @return Voyagepersonalise
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set nbrParticipant
     *
     * @param integer $nbrParticipant
     *
     * @return Voyagepersonalise
     */
    public function setNbrParticipant($nbrParticipant)
    {
        $this->nbrParticipant = $nbrParticipant;

        return $this;
    }

    /**
     * Get nbrParticipant
     *
     * @return integer
     */
    public function getNbrParticipant()
    {
        return $this->nbrParticipant;
    }

    /**
     * Set hotelFk
     *
     * @param \GoVoyageBundle\Entity\Users $hotelFk
     *
     * @return Voyagepersonalise
     */
    public function setHotelFk(\GoVoyageBundle\Entity\Users $hotelFk = null)
    {
        $this->hotelFk = $hotelFk;

        return $this;
    }

    /**
     * Get hotelFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getHotelFk()
    {
        return $this->hotelFk;
    }

    /**
     * Set clientVpFk
     *
     * @param \GoVoyageBundle\Entity\Users $clientVpFk
     *
     * @return Voyagepersonalise
     */
    public function setClientVpFk(\GoVoyageBundle\Entity\Users $clientVpFk = null)
    {
        $this->clientVpFk = $clientVpFk;

        return $this;
    }

    /**
     * Get clientVpFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getClientVpFk()
    {
        return $this->clientVpFk;
    }

    /**
     * Set event1Fk
     *
     * @param \GoVoyageBundle\Entity\Evenement $event1Fk
     *
     * @return Voyagepersonalise
     */
    public function setEvent1Fk(\GoVoyageBundle\Entity\Evenement $event1Fk = null)
    {
        $this->event1Fk = $event1Fk;

        return $this;
    }

    /**
     * Get event1Fk
     *
     * @return \GoVoyageBundle\Entity\Evenement
     */
    public function getEvent1Fk()
    {
        return $this->event1Fk;
    }

    /**
     * Set idGuideFk
     *
     * @param \GoVoyageBundle\Entity\Users $idGuideFk
     *
     * @return Voyagepersonalise
     */
    public function setIdGuideFk(\GoVoyageBundle\Entity\Users $idGuideFk = null)
    {
        $this->idGuideFk = $idGuideFk;

        return $this;
    }

    /**
     * Get idGuideFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getIdGuideFk()
    {
        return $this->idGuideFk;
    }
}
