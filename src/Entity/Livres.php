<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livres
 *
 * @ORM\Table(name="livres", indexes={@ORM\Index(name="id_auteur", columns={"id_auteur"}), @ORM\Index(name="id_genre", columns={"id_genre"})})

 */

use ApiPlatform\Core\Annotation\ApiResource;
/*
    * @ApiResource()
    * @ORM\Entity(repositoryClass="App\Repository\Livres")
    …
   */

class Livres
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_isbn", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeIsbn;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Annee", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $annee = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="integer", nullable=false)
     */
    private $idAuteur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_genre", type="integer", nullable=false)
     */
    private $idGenre;
}
