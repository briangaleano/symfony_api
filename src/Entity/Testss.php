<?php

namespace App\Entity;

use App\Repository\TestssRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestssRepository::class)]
class Testss
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?Summary $id): static
    {
        $this->id = $id;

        return $this;
    }
}
