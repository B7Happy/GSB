<?php

namespace PPEPharBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="PPEPharBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\ManyToOne(targetEntity="client", inversedBy="Commande")
     */
     private $client;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="facture", type="string", length=255)
     */
    private $facture;

    /**
     * @var string
     *
     * @ORM\Column(name="commercial", type="string", length=255)
     */
    private $commercial;

    /**
     * @var string
     *
     * @ORM\Column(name="imsig", type="string", length=255)
     */
    private $imsig;

    /**
     * @var int
     *
     * @ORM\Column(name="TTprix", type="integer")
     */
    private $tTprix;


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
     * @return Commande
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set facture
     *
     * @param string $facture
     *
     * @return Commande
     */
    public function setFacture($facture)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return string
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set commercial
     *
     * @param string $commercial
     *
     * @return Commande
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;

        return $this;
    }

    /**
     * Get commercial
     *
     * @return string
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * Set imsig
     *
     * @param string $imsig
     *
     * @return Commande
     */
    public function setImsig($imsig)
    {
        $this->imsig = $imsig;

        return $this;
    }

    /**
     * Get imsig
     *
     * @return string
     */
    public function getImsig()
    {
        return $this->imsig;
    }

    /**
     * Set tTprix
     *
     * @param integer $tTprix
     *
     * @return Commande
     */
    public function setTTprix($tTprix)
    {
        $this->tTprix = $tTprix;

        return $this;
    }

    /**
     * Get tTprix
     *
     * @return int
     */
    public function getTTprix()
    {
        return $this->tTprix;
    }
}
