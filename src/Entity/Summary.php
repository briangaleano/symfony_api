<?php

namespace App\Entity;

use App\Repository\SummaryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SummaryRepository::class)]
class Summary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_insertion = null;

    #[ORM\Column(nullable: true)]
    private ?int $process_etl = null;

    #[ORM\Column(length: 255)]
    private ?string $file_path = null;

    #[ORM\Column(length: 255)]
    private ?string $file_path_etl = null;

    /**
     * @var Collection<int, EtlDetail>
     */
    #[ORM\OneToMany(targetEntity: EtlDetail::class, mappedBy: 'id', orphanRemoval: true)]
    private Collection $etl_details;

    public function __construct()
    {
        $this->etl_details = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getDateInsertion(): ?\DateTimeInterface
    {
        return $this->date_insertion;
    }

    public function setDateInsertion(\DateTimeInterface $date_insertion): static
    {
        $this->date_insertion = $date_insertion;

        return $this;
    }

    public function getProcessEtl(): ?int
    {
        return $this->process_etl;
    }

    public function setProcessEtl(int $process_etl): static
    {
        $this->process_etl = $process_etl;

        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->file_path;
    }

    public function setFilePath(string $file_path): static
    {
        $this->file_path = $file_path;

        return $this;
    }

    public function getFilePathEtl(): ?string
    {
        return $this->file_path_etl;
    }

    public function setFilePathEtl(string $file_path_etl): static
    {
        $this->file_path_etl = $file_path_etl;

        return $this;
    }

    /**
     * @return Collection<int, EtlDetail>
     */
    public function getEtlDetails(): Collection
    {
        return $this->etl_details;
    }

    public function addEtlDetails(EtlDetail $etlDetail): static
    {
        if (!$this->etl_details->contains($etlDetail)) {
            $this->etl_details->add($etlDetail);
            $etlDetail->setId($this);
        }

        return $this;
    }

    public function removeEtlDetails(EtlDetail $etlDetail): static
    {
        if ($this->etl_details->removeElement($etlDetail)) {
            // set the owning side to null (unless already changed)
            if ($etlDetail->getId() === $this) {
                $etlDetail->setId(null);
            }
        }

        return $this;
    }
}
