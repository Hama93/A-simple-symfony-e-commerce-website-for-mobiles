<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var string
     */
    private $nomCategorie;

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
     * Get nomCategorie
     *
     * @return string 
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    /**
     * Add libelle
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Produits $libelle
     * @return Categorie
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
