<?php

namespace App\Entity;

use App\Repository\AvisRepository;
<<<<<<< HEAD
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AvisRepository")
 */
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
>>>>>>> 16a338933512e8622f2e044e0883715a42506308
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: 1)]
    private ?string $note = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentaire = null;

    #[ORM\Column]
    private ?bool $moderation = null;
=======
    #[ORM\Column(length: 255)]
    private ?string $NomUtilsateur = null;

    #[ORM\Column]
    private ?int $Note = null;

    #[ORM\Column(length: 255)]
    private ?string $Commentaire = null;

    #[ORM\Column]
    private ?bool $Moderation = null;

    #[ORM\OneToMany(mappedBy: 'avis', targetEntity: Jeux::class)]
    private Collection $Jeux;

    #[ORM\OneToMany(mappedBy: 'avis', targetEntity: Utilisateur::class)]
    private Collection $Utilisateur;

    public function __construct()
    {
        $this->Jeux = new ArrayCollection();
        $this->Utilisateur = new ArrayCollection();
    }
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;
=======
    public function getNomUtilsateur(): ?string
    {
        return $this->NomUtilsateur;
    }

    public function setNomUtilsateur(string $NomUtilsateur): self
    {
        $this->NomUtilsateur = $NomUtilsateur;

        return $this;
    }

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

    public function getCommentaire(): ?string
    {
<<<<<<< HEAD
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;
=======
        return $this->Commentaire;
    }

    public function setCommentaire(string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    public function isModeration(): ?bool
    {
<<<<<<< HEAD
        return $this->moderation;
    }

    public function setModeration(bool $moderation): self
    {
        $this->moderation = $moderation;
=======
        return $this->Moderation;
    }

    public function setModeration(bool $Moderation): self
    {
        $this->Moderation = $Moderation;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    /**
<<<<<<< HEAD
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur", inversedBy="avis")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Jeux", inversedBy="avis")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jeux;
=======
     * @return Collection<int, Jeux>
     */
    public function getJeux(): Collection
    {
        return $this->Jeux;
    }

    public function addJeux(Jeux $jeux): self
    {
        if (!$this->Jeux->contains($jeux)) {
            $this->Jeux->add($jeux);
            $jeux->setAvis($this);
        }

        return $this;
    }

    public function removeJeux(Jeux $jeux): self
    {
        if ($this->Jeux->removeElement($jeux)) {
            // set the owning side to null (unless already changed)
            if ($jeux->getAvis() === $this) {
                $jeux->setAvis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUtilisateur(): Collection
    {
        return $this->Utilisateur;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->Utilisateur->contains($utilisateur)) {
            $this->Utilisateur->add($utilisateur);
            $utilisateur->setAvis($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->Utilisateur->removeElement($utilisateur)) {
            // set the owning side to null (unless already changed)
            if ($utilisateur->getAvis() === $this) {
                $utilisateur->setAvis(null);
            }
        }

        return $this;
    }
>>>>>>> 16a338933512e8622f2e044e0883715a42506308
}
