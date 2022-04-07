<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="auteur")

 */

use ApiPlatform\Core\Annotation\ApiResource;
/*
    * @ApiResource()
    * @ORM\Entity(repositoryClass="App\Repository\Auteur")
    …
   */

class Auteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prénom", type="string", length=255, nullable=false)
     */
    private $pr�nom;

    /**
     * @var \Livres
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Livres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_auteur")
     * })
     */
    private $idAuteur;
}
