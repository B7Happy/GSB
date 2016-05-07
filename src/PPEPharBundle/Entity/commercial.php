<?php

namespace PPEPharBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commercial
 *
 * @ORM\Table(name="commercial")
 * @ORM\Entity(repositoryClass="PPEPharBundle\Repository\commercialRepository")
 */
class commercial
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
     * @ORM\Column(name="iden", type="string", length=255)
     */
    private $iden;

    /**
     * @var string
     *
     * @ORM\Column(name="mp", type="string", length=255)
     */
    private $mp;


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
     * Set iden
     *
     * @param string $iden
     *
     * @return commercial
     */
    public function setIden($iden)
    {
        $this->iden = $iden;

        return $this;
    }

    /**
     * Get iden
     *
     * @return string
     */
    public function getIden()
    {
        return $this->iden;
    }

    /**
     * Set mp
     *
     * @param string $mp
     *
     * @return commercial
     */
    public function setMp($mp)
    {
        $this->mp = $mp;

        return $this;
    }

    /**
     * Get mp
     *
     * @return string
     */
    public function getMp()
    {
        return $this->mp;
    }
}
