<?php

namespace App\Entity;
use App\Repository\EvenementsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:EvenementsRepository::class)]
class Evenements
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id=null;

    
    #[ORM\Column(length: 255)]
    private ?String $nom=null;

 
    #[ORM\Column(length:65535)]
    private ?string $description=null;

    
    #[ORM\Column(type: 'date')]
    private $dateDebut;

    
    #[ORM\Column(type: 'date')]
    private $dateFin;

    
    #[ORM\Column(length:255)]
    private ?string $lieu=null;

    #[ORM\Column(name: "likee", type: "integer")]
    private ?int $likee =0;

    #[ORM\Column(name: "dislikee", type: "integer")]
    private $dislikee = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getLikee(): ?int
    {
        return $this->likee;
    }

    public function setLikee(?int $likee): self
    {
        $this->likee = $likee;

        return $this;
    }

    public function getDislikee(): ?int
    {
        return $this->dislikee;
    }

    public function setDislikee(?int $dislikee): self
    {
        $this->dislikee = $dislikee;

        return $this;
    }


}
