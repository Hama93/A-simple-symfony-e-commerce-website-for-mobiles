<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 */
class Produits
{
    /**
     * @var string
     */
    private $image;

    /**
     * @var float
     */
    private $prix;
    
    /**
     * @var float
     */
    private $prixAchete;
    /**
     * @var integer
     */
    private $stock;
    
    /**
     * @var integer
     */
    private $qteAchete;
    
    /**
     * @var string
     */
    private $etat;

    /**
     * @var \DateTime
     */
    private $dateajout;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idPromo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nomMarque;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $emailCommercial;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idcmd;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nomCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPromo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nomMarque = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emailCommercial = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idcmd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nomCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Produits
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produits
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
     * Set stock
     *
     * @param integer $stock
     * @return Produits
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Produits
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
     * Set dateajout
     *
     * @param \DateTime $dateajout
     * @return Produits
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    /**
     * Get dateajout
     *
     * @return \DateTime 
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add idPromo
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Promotion $idPromo
     * @return Produits
     */
    public function addIdPromo(\OrangMedic\OrangMedicBundle\Entity\Promotion $idPromo)
    {
        $this->idPromo[] = $idPromo;

        return $this;
    }

    /**
     * Remove idPromo
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Promotion $idPromo
     */
    public function removeIdPromo(\OrangMedic\OrangMedicBundle\Entity\Promotion $idPromo)
    {
        $this->idPromo->removeElement($idPromo);
    }

    /**
     * Get idPromo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPromo()
    {
        if($this->idPromo[0]){
            $this->prixAchete = $this->prix - (($this->prix * ($this->idPromo[0]->getPourcentage()))/100);
            $this->prix = $this->prixAchete;
        }
        else $this->prixAchete = $this->prix;
        
        return $this->idPromo;
    }

    /**
     * Add nomMarque
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Marque $nomMarque
     * @return Produits
     */
    public function addNomMarque(\OrangMedic\OrangMedicBundle\Entity\Marque $nomMarque)
    {
        $this->nomMarque[] = $nomMarque;

        return $this;
    }

    /**
     * Remove nomMarque
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Marque $nomMarque
     */
    public function removeNomMarque(\OrangMedic\OrangMedicBundle\Entity\Marque $nomMarque)
    {
        $this->nomMarque->removeElement($nomMarque);
    }

    /**
     * Get nomMarque
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNomMarque()
    {
        return $this->nomMarque;
    }

    /**
     * Add emailCommercial
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Commercial $emailCommercial
     * @return Produits
     */
    public function addEmailCommercial(\OrangMedic\OrangMedicBundle\Entity\Commercial $emailCommercial)
    {
        $this->emailCommercial[] = $emailCommercial;

        return $this;
    }

    /**
     * Remove emailCommercial
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Commercial $emailCommercial
     */
    public function removeEmailCommercial(\OrangMedic\OrangMedicBundle\Entity\Commercial $emailCommercial)
    {
        $this->emailCommercial->removeElement($emailCommercial);
    }

    /**
     * Get emailCommercial
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmailCommercial()
    {
        return $this->emailCommercial;
    }

    /**
     * Add idcmd
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Commande $idcmd
     * @return Produits
     */
    public function addIdcmd(\OrangMedic\OrangMedicBundle\Entity\Commande $idcmd)
    {
        $this->idcmd[] = $idcmd;

        return $this;
    }

    /**
     * Remove idcmd
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Commande $idcmd
     */
    public function removeIdcmd(\OrangMedic\OrangMedicBundle\Entity\Commande $idcmd)
    {
        $this->idcmd->removeElement($idcmd);
    }

    /**
     * Get idcmd
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdcmd()
    {
        return $this->idcmd;
    }

    /**
     * Add nomCategorie
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Categorie $nomCategorie
     * @return Produits
     */
    public function addNomCategorie(\OrangMedic\OrangMedicBundle\Entity\Categorie $nomCategorie)
    {
        $this->nomCategorie[] = $nomCategorie;

        return $this;
    }

    /**
     * Remove nomCategorie
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Categorie $nomCategorie
     */
    public function removeNomCategorie(\OrangMedic\OrangMedicBundle\Entity\Categorie $nomCategorie)
    {
        $this->nomCategorie->removeElement($nomCategorie);
    }

    /**
     * Get nomCategorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }
    
     /**
     * Get prixAchete
     *
     * @return float
     */
    public function getPrixAchete()
    {
        return $this->prixAchete;
    }
    
    public function getQteAchete()
    {
        return $this->qteAchete;
    }
    
    public function setPrixAchete($prisa)
    {
      $this->prixAchete = $prisa;
    }
    
    public function setQteAchete($qtea)
    {
      $this->qteAchete = $qtea;
    }
}
