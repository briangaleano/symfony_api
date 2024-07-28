<?php

namespace App\Entity;

use App\Repository\SummaryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SummaryRepository::class)]
class Summary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $registre = null;

    #[ORM\Column(nullable: true)]
    private ?int $male = null;

    #[ORM\Column(nullable: true)]
    private ?int $female = null;

    #[ORM\Column(nullable: true)]
    private ?int $other = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getRegistre(): ?int
    {
        return $this->registre;
    }

    public function setRegistre(?int $registre): static
    {
        $this->registre = $registre;

        return $this;
    }

    public function getMale(): ?int
    {
        return $this->male;
    }

    public function setMale(?int $male): static
    {
        $this->male = $male;

        return $this;
    }

    public function getFemale(): ?int
    {
        return $this->female;
    }

    public function setFemale(?int $female): static
    {
        $this->female = $female;

        return $this;
    }

    public function getOther(): ?int
    {
        return $this->other;
    }

    public function setOther(?int $other): static
    {
        $this->other = $other;

        return $this;
    }
}
