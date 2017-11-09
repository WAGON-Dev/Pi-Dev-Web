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
     * @return int
     */
    public function getIdVp()
    {
        return $this->idVp;
    }

    /**
     * @param int $idVp
     */
    public function setIdVp($idVp)
    {
        $this->idVp = $idVp;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * @param string $villeDepart
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;
    }

    /**
     * @return string
     */
    public function getVilleArrive()
    {
        return $this->villeArrive;
    }

    /**
     * @param string $villeArrive
     */
    public function setVilleArrive($villeArrive)
    {
        $this->villeArrive = $villeArrive;
    }

    /**
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * @param \DateTime $dateDepart
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    }

    /**
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * @param \DateTime $dateArrive
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;
    }

    /**
     * @return int
     */
    public function getNbrParticipant()
    {
        return $this->nbrParticipant;
    }

    /**
     * @param int $nbrParticipant
     */
    public function setNbrParticipant($nbrParticipant)
    {
        $this->nbrParticipant = $nbrParticipant;
    }

    /**
     * @return \Users
     */
    public function getHotelFk()
    {
        return $this->hotelFk;
    }

    /**
     * @param \Users $hotelFk
     */
    public function setHotelFk($hotelFk)
    {
        $this->hotelFk = $hotelFk;
    }

    /**
     * @return \Users
     */
    public function getClientVpFk()
    {
        return $this->clientVpFk;
    }

    /**
     * @param \Users $clientVpFk
     */
    public function setClientVpFk($clientVpFk)
    {
        $this->clientVpFk = $clientVpFk;
    }

    /**
     * @return \Evenement
     */
    public function getEvent1Fk()
    {
        return $this->event1Fk;
    }

    /**
     * @param \Evenement $event1Fk
     */
    public function setEvent1Fk($event1Fk)
    {
        $this->event1Fk = $event1Fk;
    }

    /**
     * @return \Users
     */
    public function getIdGuideFk()
    {
        return $this->idGuideFk;
    }

    /**
     * @param \Users $idGuideFk
     */
    public function setIdGuideFk($idGuideFk)
    {
        $this->idGuideFk = $idGuideFk;
    }




}
