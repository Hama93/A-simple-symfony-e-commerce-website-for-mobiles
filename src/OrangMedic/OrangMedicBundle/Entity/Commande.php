<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 */
class Commande
{
    /**
     * @var float
     */
    private $prix;

    /**
     * @var integer
     */
    private $qtetotale;

    /**
     * @var \DateTime
     */
    private $datedecommande;

    /**
     * @var string
     */
    private $etat;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $idcmd;

    /**
     * @var \OrangMedic\OrangMedicBundle\Entity\Client
     */
    private $emailClient;

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
     * Set prix
     *
     * @param float $prix
     * @return Commande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set qtetotale
     *
     * @param integer $qtetotale
     * @return Commande
     */
    public function setQtetotale($qtetotale)
    {
        $this->qtetotale = $qtetotale;

        return $this;
    }

    /**
     * Get qtetotale
     *
     * @return integer 
     */
    public function getQtetotale()
    {
        return $this->qtetotale;
    }

    /**
     * Set datedecommande
     *
     * @param \DateTime $datedecommande
     * @return Commande
     */
    public function setDatedecommande($datedecommande)
    {
        $this->datedecommande = $datedecommande;

        return $this;
    }

    /**
     * Get datedecommande
     *
     * @return \DateTime 
     */
    public function getDatedecommande()
    {
        return $this->datedecommande;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Commande
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Get idcmd
     *
     * @return string 
     */
    public function getIdcmd()
    {
        return $this->idcmd;
    }

    /**
     * Set emailClient
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Client $emailClient
     * @return Commande
     */
    public function setEmailClient(\OrangMedic\OrangMedicBundle\Entity\Client $emailClient = null)
    {
        $this->emailClient = $emailClient;

        return $this;
    }
    
    public function setIdcmd($id)
    {
        $this->idcmd = $id;

        return $this;
    }

    /**
     * Get emailClient
     *
     * @return \OrangMedic\OrangMedicBundle\Entity\Client 
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }

    /**
     * Add libelle
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Produits $libelle
     * @return Commande
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
