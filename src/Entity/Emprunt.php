<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprunt
 *
 * @ORM\Table(name="emprunt", indexes={@ORM\Index(name="id_emprunteur", columns={"id_emprunteur"}), @ORM\Index(name="code_isbn", columns={"code_isbn"})})

 */

use ApiPlatform\Core\Annotation\ApiResource;
/*
    * @ApiResource()
    * @ORM\Entity(repositoryClass="App\Repository\Emprunt")
    …
   */

class Emprunt
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_emprunt", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dateEmprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var int
     *
     * @ORM\Column(name="id_emprunteur", type="integer", nullable=false)
     */
    private $idEmprunteur;

    /**
     * @var \Livres
     *
     * @ORM\ManyToOne(targetEntity="Livres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_isbn", referencedColumnName="code_isbn")
     * })
     */
    private $codeIsbn;
}
