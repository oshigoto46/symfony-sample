<?php

namespace App\Entity;

use App\Repository\TweetPostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TweetPostRepository::class)
 */
class TweetPost
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * #ORM\Column(type="string", length=255)
     */
    // private $tweet;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    // public function getTweet(): ?string
    // {
    //     return $this->tweet;
    // }

    // public function setTweet(string $tweet): self
    // {
    //     $this->tweet = $tweet;

    //     return $this;
    // }

    // public function getCreatedDate(): ?\DateTimeInterface
    // {
    //     return $this->created_date;
    // }

    // public function setCreatedDate(\DateTimeInterface $created_date): self
    // {
    //     $this->created_date = $created_date;

    //     return $this;
    // }

    // public function getTweet(): ?string
    // {
    //     return $this->tweet;
    // }

    // public function setTweet(string $tweet): self
    // {
    //     $this->tweet = $tweet;

    //     return $this;
    // }

    // public function getTweet(): ?string
    // {
    //     return $this->tweet;
    // }

    // public function setTweet(string $tweet): self
    // {
    //     $this->tweet = $tweet;

    //     return $this;
    // }


}
