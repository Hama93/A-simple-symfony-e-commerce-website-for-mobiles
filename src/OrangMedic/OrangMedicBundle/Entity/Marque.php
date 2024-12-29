<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 */
class Marque
{
    /**
     * @var string
     */
    private $nomMarque;

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
     * Get nomMarque
     *
     * @return string 
     */
    public function getNomMarque()
    {
        return $this->nomMarque;
    }

    /**
     * Add libelle
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Produits $libelle
     * @return Marque
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
