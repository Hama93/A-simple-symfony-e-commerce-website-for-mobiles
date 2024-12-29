<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
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
    private $emailClient;

    /**
     * @var \OrangMedic\OrangMedicBundle\Entity\Administrateur
     */
    private $idAdmin;

    /**
     * @var \OrangMedic\OrangMedicBundle\Entity\Newsletter
     */
    private $emailn;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * Get emailClient
     *
     * @return string 
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }
    
    /**
     * Set idAdmin
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Administrateur $idAdmin
     * @return Client
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
     * Set emailn
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Newsletter $emailn
     * @return Client
     */
    public function setEmailn(\OrangMedic\OrangMedicBundle\Entity\Newsletter $emailn = null)
    {
        $this->emailn = $emailn;

        return $this;
    }

    /**
     * Get emailn
     *
     * @return \OrangMedic\OrangMedicBundle\Entity\Newsletter 
     */
    public function getEmailn()
    {
        return $this->emailn;
    }
}
