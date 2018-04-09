<?php

// src/AppBundle/Entity/Competences.php
namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Competences")
 * @ORM\Entity
 * @ApiResource
 */
class Competences
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    **/
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;
    
    public function __construct()
    {
        
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}
