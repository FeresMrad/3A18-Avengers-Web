<?php

namespace App\Entity;
use App\Repository\JetonsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:JetonsRepository::class)]
class Jetons
{
    #[ORM\Column(name: "count", type: "integer", nullable: false, options: ["default" => "20"])]
    private int $count = 20;
    /**
     * @var \App\Entity\User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    
   /* private $user;*/
   #[ORM\OneToOne(targetEntity: \App\Entity\User::class)]
#[ORM\JoinColumn(name: "user_id", referencedColumnName: "id_user")]
#[ORM\Id]
#[ORM\GeneratedValue(strategy: "NONE")]
private \App\Entity\User $user;

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

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


}
