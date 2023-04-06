<?php

namespace App\Entity;
use App\Repository\TransactionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:TransactionsRepository::class)]
class Transactions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(name: "to_user_id", type: "integer", nullable: true)]
    private ?int $toUserId;

    #[ORM\Column(name: "to_user_item_id", type: "integer", nullable: true)]
    private ?int $toUserItemId;

  
    #[ORM\Column(length: 255)]
    private ?string $fromUserItem;

    #[ORM\Column(name: "to_user_item", type: "string", length: 255, nullable: true)]
    private ?string $toUserItem;

    
    #[ORM\Column(length: 255)]
    private ?string $fromUserImage;

  
    #[ORM\Column(length: 255)]
    private ?string $toUserImage;

    #[ORM\Column(name: "jetons_prop", type: "integer", nullable: true)]
    private ?int $jetonsProp;
    

    #[ORM\Column(name: "jetons_dem", type: "integer", nullable: true)]
    private ?int $jetonsDem;
    

    
    #[ORM\Column(length: 255)]
    private ?string $commentaire;

    #[ORM\Column(name: "etat", type: "string", length: 255, nullable: false, options: ["default" => "En cours"])]
    private string $etat = 'En cours';



    /**
     * @var \App\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_user_id", referencedColumnName="id_user")
     * })
     */
    #[ORM\ManyToOne(targetEntity: "User")]
    #[ORM\JoinColumn(name: "from_user_id", referencedColumnName: "id_user")]
    private $fromUser;
   
    /**
     * @var \App\Entity\Items
     *
     * @ORM\ManyToOne(targetEntity="Items")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_user_item_id", referencedColumnName="id")
     * })
     */
    #[ORM\ManyToOne(targetEntity: "Items")]
    #[ORM\JoinColumn(name: "from_user_item_id", referencedColumnName: "id")]
    private $fromUserItem2;
  
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToUserId(): ?int
    {
        return $this->toUserId;
    }

    public function setToUserId(?int $toUserId): self
    {
        $this->toUserId = $toUserId;

        return $this;
    }

    public function getToUserItemId(): ?int
    {
        return $this->toUserItemId;
    }

    public function setToUserItemId(?int $toUserItemId): self
    {
        $this->toUserItemId = $toUserItemId;

        return $this;
    }

    public function getFromUserItem(): ?string
    {
        return $this->fromUserItem;
    }

    public function setFromUserItem(?string $fromUserItem): self
    {
        $this->fromUserItem = $fromUserItem;

        return $this;
    }

    public function getToUserItem(): ?string
    {
        return $this->toUserItem;
    }

    public function setToUserItem(?string $toUserItem): self
    {
        $this->toUserItem = $toUserItem;

        return $this;
    }

    public function getFromUserImage(): ?string
    {
        return $this->fromUserImage;
    }

    public function setFromUserImage(?string $fromUserImage): self
    {
        $this->fromUserImage = $fromUserImage;

        return $this;
    }

    public function getToUserImage(): ?string
    {
        return $this->toUserImage;
    }

    public function setToUserImage(?string $toUserImage): self
    {
        $this->toUserImage = $toUserImage;

        return $this;
    }

    public function getJetonsProp(): ?int
    {
        return $this->jetonsProp;
    }

    public function setJetonsProp(?int $jetonsProp): self
    {
        $this->jetonsProp = $jetonsProp;

        return $this;
    }

    public function getJetonsDem(): ?int
    {
        return $this->jetonsDem;
    }

    public function setJetonsDem(?int $jetonsDem): self
    {
        $this->jetonsDem = $jetonsDem;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getFromUser(): ?User
    {
        return $this->fromUser;
    }

    public function setFromUser(?User $fromUser): self
    {
        $this->fromUser = $fromUser;

        return $this;
    }

    public function getFromUserItem2(): ?Items
    {
        return $this->fromUserItem2;
    }

    public function setFromUserItem2(?Items $fromUserItem2): self
    {
        $this->fromUserItem2 = $fromUserItem2;

        return $this;
    }


}

?>