<?php

// src/AppBundle/Entity/Experience.php
namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM ;

/**

 * @ORM\Entity
 * @ORM\Table(name="Experience")
 * @ApiResource
 */
class Experience
{

    /**
     * @ORM\Id
     * @ORM\Column (type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
    **/
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

     /**
     * @ORM\Column(type="string")
     */
    private $description;
    /** 
     * @ORM\Column(type="date")
     **/
    private $dateDebut;
    /** 
     * @ORM\Column(type="date")
     **/
    private $dateFin;
    /** 
     * @ORM\Column(type="string")
     **/
    private $lieu;
    
    function getId()
    {
        return $this->id;
    }
    function getName()
    {
        return $this->name;
    }
    function getDateDebut()
    {
        return $this->dateDebut;
    }
    function getDateFin()
    {
        return $this->dateFin;
    }
    
    function getLieu()
    {
        return $this->lieu;
    }
    function getDescription()
    {
        return $this->description;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    
    function setName($name)
    {
        $this->name = $name;
    }
    
    function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }
    
    function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }
    
    function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }
    function setDescription($description)
    {
        $this->description = $description;
    }
}
