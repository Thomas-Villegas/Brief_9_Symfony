<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $note = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $avis = null;

    #[ORM\Column]
    private ?bool $moderation = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?jeux $jeux = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?utilisateur $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function isModeration(): ?bool
    {
        return $this->moderation;
    }

    public function setModeration(bool $moderation): self
    {
        $this->moderation = $moderation;

        return $this;
    }

    public function getJeux(): ?jeux
    {
        return $this->jeux;
    }

    public function setJeux(?jeux $jeux): self
    {
        $this->jeux = $jeux;

        return $this;
    }

    public function getUser(): ?utilisateur
    {
        return $this->user;
    }

    public function setUser(?utilisateur $user): self
    {
        $this->user = $user;

        return $this;
    }
}
