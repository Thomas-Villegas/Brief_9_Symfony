<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
<<<<<<< HEAD
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
=======
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
>>>>>>> 16a338933512e8622f2e044e0883715a42506308
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
<<<<<<< HEAD
    private ?string $pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $password = null;

    #[ORM\Column(nullable: true)]
    private ?int $role = null;
=======
    private ?string $Pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column(length: 255)]
    private ?string $Rôle = null;

    #[ORM\ManyToOne(inversedBy: 'Utilisateur')]
    private ?Avis $avis = null;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
<<<<<<< HEAD
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;
=======
        return $this->Pseudo;
    }

    public function setPseudo(string $Pseudo): self
    {
        $this->Pseudo = $Pseudo;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    public function getEmail(): ?string
    {
<<<<<<< HEAD
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
=======
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

    public function getPassword(): ?string
    {
<<<<<<< HEAD
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
=======
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

<<<<<<< HEAD
    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(?int $role): self
    {
        $this->role = $role;
=======
    public function getRôle(): ?string
    {
        return $this->Rôle;
    }

    public function setRôle(string $Rôle): self
    {
        $this->Rôle = $Rôle;
>>>>>>> 16a338933512e8622f2e044e0883715a42506308

        return $this;
    }

<<<<<<< HEAD
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Avis", mappedBy="utilisateur")
     */
    private $avis;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
=======
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
