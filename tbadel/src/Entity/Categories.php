<?php

namespace App\Entity;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:CategoriesRepository::class)]
class Categories
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idc=null;

   
    #[ORM\Column(length: 255)]
    private ?string $categorie=null;

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


}
