<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commercial
 */
class Commercial
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $sexe;

    /**
     * @var string
     */
    private $mp;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $emailCommercial;

    /**
     * @var \OrangMedic\OrangMedicBundle\Entity\Administrateur
     */
    private $idAdmin;

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
     * Set nom
     *
     * @param string $nom
     * @return Commercial
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
     * Set prenom
     *
     * @param string $prenom
     * @return Commercial
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Commercial
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set mp
     *
     * @param string $mp
     * @return Commercial
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

    /**
     * Set photo
     *
     * @param string $photo
     * @return Commercial
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Commercial
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Commercial
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get emailCommercial
     *
     * @return string 
     */
    public function getEmailCommercial()
    {
        return $this->emailCommercial;
    }

    /**
     * Set idAdmin
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Administrateur $idAdmin
     * @return Commercial
     */
    public function setIdAdmin(\OrangMedic\OrangMedicBundle\Entity\Administrateur $idAdmin = null)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return \OrangMedic\OrangMedicBundle\Entity\Administrateur 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Add libelle
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Produits $libelle
     * @return Commercial
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
