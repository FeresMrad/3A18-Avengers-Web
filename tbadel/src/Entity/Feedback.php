<?php

namespace App\Entity;
use App\Entity\Transactions;
use App\Repository\FeedbackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:FeedbackRepository::class)]
class Feedback
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id=null;

    #[ORM\Column(length: 255)]
    private ?String $rating;

    
    
     #[ORM\Column(length: 65535)]
    private ?string $comment;


    #[ORM\Column(name: "date", type: "date", nullable: true, options: ["default" => "CURRENT_TIMESTAMP"])]
    private  $date;
   

   
    #[ORM\ManyToOne(targetEntity: Transactions::class)]
    #[ORM\JoinColumn(name: "transaction_id", referencedColumnName: "id")]
    private $transaction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(string $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTransaction(): ?Transactions
    {
        return $this->transaction;
        ;
    }

    public function setTransaction(?Transactions $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }


}
?>