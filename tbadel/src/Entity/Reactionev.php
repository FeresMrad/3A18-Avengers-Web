<?php

namespace App\Entity;
use App\Repository\ReactionevRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:ReactionevRepository::class)]
class Reactionev
{
 
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]  
    private ?int $id;

    #[ORM\Column(length: 255)]
    private ?string $commentaire;

    /**
     * @var \App\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    /**
     * @var \App\Entity\Evenements
     *
     * @ORM\ManyToOne(targetEntity="Evenements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evenement_id", referencedColumnName="id")
     * })
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getEvenement(): ?Evenements
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenements $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }


}
