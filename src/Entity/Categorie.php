<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", indexes={@ORM\Index(name="id_genre", columns={"id_categorie_genre"})})

 */

use ApiPlatform\Core\Annotation\ApiResource;
/*
    * @ApiResource()
    * @ORM\Entity(repositoryClass="App\Repository\Categorie")
    …
   */

class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomCategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie_genre", type="integer", nullable=false)
     */
    private $idCategorieGenre;
}
