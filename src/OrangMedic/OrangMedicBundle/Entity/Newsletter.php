<?php

namespace OrangMedic\OrangMedicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 */
class Newsletter
{
    /**
     * @var string
     */
    private $emailn;

    /**
     * @var \OrangMedic\OrangMedicBundle\Entity\Administrateur
     */
    private $idAdmin;


    /**
     * Get emailn
     *
     * @return string 
     */
    public function getEmailn()
    {
        return $this->emailn;
    }

    /**
     * Set idAdmin
     *
     * @param \OrangMedic\OrangMedicBundle\Entity\Administrateur $idAdmin
     * @return Newsletter
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
}
