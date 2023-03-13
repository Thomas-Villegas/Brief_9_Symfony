<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

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

    public function getId(): ?int
    {
        return $this->id;
    }

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

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }

    public function isModeration(): ?bool
    {
        return $this->Moderation;
    }

    public function setModeration(bool $Moderation): self
    {
        $this->Moderation = $Moderation;

        return $this;
    }

    /**
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
}
