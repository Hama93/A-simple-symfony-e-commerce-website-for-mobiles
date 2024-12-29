<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 */
class Promotion
{
    /**
     * @var float
     */
    private $pourcentage;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $idPromo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $libelle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->libelle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set pourcentage
     *
     * @param float $pourcentage
     * @return Promotion
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return float 
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Promotion
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
     * Get idPromo
     *
     * @return string 
     */
    public function getIdPromo()
    {
        return $this->idPromo;
    }

    /**
     * Add libelle
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Produits $libelle
     * @return Promotion
     */
    public function addLibelle(\OrangMedic\OrangMedicBundle\Entity\Produits $libelle)
    {
        $this->libelle[] = $libelle;

        return $this;
    }

    /**
     * Remove libelle
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Produits $libelle
     */
    public function removeLibelle(\OrangMedic\OrangMedicBundle\Entity\Produits $libelle)
    {
        $this->libelle->removeElement($libelle);
    }

    /**
     * Get libelle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
