<?php

namespace App\Entity;

use App\Repository\GenreRepository;
<<<<<<< HEAD
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GenreRepository")
 */
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
>>>>>>> 16a338933512e8622f2e044e0883715a42506308
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
<<<<<<< HEAD
    private ?string $titre = null;
=======
    private ?string $Titre = null;

    #[ORM\ManyToMany(targetEntity: Jeux::class, mappedBy: 'Genre')]
    private Collection $jeuxes;

    public function __construct()
    {
        $this->jeuxes = new ArrayCollection();
    }
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
<<<<<<< HEAD
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
=======
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    /**
<<<<<<< HEAD
     * @ORM\ManyToMany(targetEntity="App\Entity\Jeux", mappedBy="genres")
     */
    private $jeux;

    public function __construct()
    {
        $this->jeux = new ArrayCollection();
=======
     * @return Collection<int, Jeux>
     */
    public function getJeuxes(): Collection
    {
        return $this->jeuxes;
    }

    public function addJeux(Jeux $jeux): self
    {
        if (!$this->jeuxes->contains($jeux)) {
            $this->jeuxes->add($jeux);
            $jeux->addGenre($this);
        }

        return $this;
    }

    public function removeJeux(Jeux $jeux): self
    {
        if ($this->jeuxes->removeElement($jeux)) {
            $jeux->removeGenre($this);
        }

        return $this;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308
    }
}
