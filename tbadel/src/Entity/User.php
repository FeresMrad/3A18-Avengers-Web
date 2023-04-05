<?php

namespace App\Entity;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idUser;

    
    #[ORM\Column(length: 255)]
    private ?string $nomUser;

  
    #[ORM\Column(length: 255)]
    private ?string $prenomUser;

    #[ORM\Column(name: "tel_user", type: "integer", nullable: false)]
    private ?int $telUser;


    
    #[ORM\Column(length: 255)]
    private ?string $emailUser;

   
    #[ORM\Column(length: 255)]
    private ?string $mdpUser;

    
    #[ORM\Column(length: 255)]
    private ?string $role;

   
    #[ORM\Column(length: 255)]
    private ?string $pdp;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getTelUser(): ?int
    {
        return $this->telUser;
    }

    public function setTelUser(int $telUser): self
    {
        $this->telUser = $telUser;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(string $emailUser): self
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    public function getMdpUser(): ?string
    {
        return $this->mdpUser;
    }

    public function setMdpUser(string $mdpUser): self
    {
        $this->mdpUser = $mdpUser;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getPdp(): ?string
    {
        return $this->pdp;
    }

    public function setPdp(string $pdp): self
    {
        $this->pdp = $pdp;

        return $this;
    }


}
