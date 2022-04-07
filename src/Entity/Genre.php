<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Genre
 *
 * @ORM\Table(name="genre", indexes={@ORM\Index(name="categorie_genre", columns={"categorie_genre"})})
 
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Genre")
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_genre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_genre", referencedColumnName="id_categorie_genre")
     * })
     */
    private $categorieGenre;

    public function getIdGenre(): ?int
    {
        return $this->idGenre;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategorieGenre(): ?Categorie
    {
        return $this->categorieGenre;
    }

    public function setCategorieGenre(?Categorie $categorieGenre): self
    {
        $this->categorieGenre = $categorieGenre;

        return $this;
    }
}
