<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
<<<<<<< HEAD
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JeuxRepository")
 */
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JeuxRepository::class)]
>>>>>>> 16a338933512e8622f2e044e0883715a42506308
class Jeux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
<<<<<<< HEAD
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $url = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $image = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: 1, nullable: true)]
    private ?string $rating = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;
=======
    private ?string $Titre = null;

    #[ORM\Column(length: 255)]
    private ?string $Url = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image = null;

    #[ORM\Column]
    private ?int $Note = null;

    #[ORM\ManyToMany(targetEntity: Genre::class, inversedBy: 'jeuxes')]
    private Collection $Genre;

    #[ORM\ManyToOne(inversedBy: 'Jeux')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Avis $avis = null;

    public function __construct()
    {
        $this->Genre = new ArrayCollection();
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

    public function getUrl(): ?string
    {
<<<<<<< HEAD
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
=======
        return $this->Url;
    }

    public function setUrl(string $Url): self
    {
        $this->Url = $Url;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    public function getDescription(): ?string
    {
<<<<<<< HEAD
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
=======
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    public function getImage(): ?string
    {
<<<<<<< HEAD
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
=======
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

<<<<<<< HEAD
    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
=======
    public function getNote(): ?int
    {
        return $this->Note;
    }

    public function setNote(int $Note): self
    {
        $this->Note = $Note;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    /**
<<<<<<< HEAD
     * @ORM\ManyToMany(targetEntity="App\Entity\Genre", inversedBy="jeux")
     * @ORM\JoinTable(name="jeux_genres",
     *                joinColumns={@ORM\JoinColumn(name="jeux_id", referencedColumnName="id")},
     *                inverseJoinColumns={@ORM\JoinColumn(name="genre_id", referencedColumnName="id")})
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Avis", mappedBy="jeux")
     * 
     */
    private $avis;
    private $genres;

    public function __construct()
    {
        $this->genres = new ArrayCollection();
        $this->avis = new ArrayCollection();
=======
     * @return Collection<int, Genre>
     */
    public function getGenre(): Collection
    {
        return $this->Genre;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->Genre->contains($genre)) {
            $this->Genre->add($genre);
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->Genre->removeElement($genre);

        return $this;
    }

    public function getAvis(): ?Avis
    {
        return $this->avis;
    }

    public function setAvis(?Avis $avis): self
    {
        $this->avis = $avis;

        return $this;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308
    }
}
