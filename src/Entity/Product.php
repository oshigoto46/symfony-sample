<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 * @ApiResource
 */
class Product
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
    private $quit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuit(): ?string
    {
        return $this->quit;
    }

    public function setQuit(string $quit): self
    {
        $this->quit = $quit;

        return $this;
    }
}
