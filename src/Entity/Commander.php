<?php

namespace App\Entity;

use App\Repository\CommanderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommanderRepository::class)]
class Commander
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'id_commander_1', targetEntity: March::class)]
    private Collection $marches1;

    #[ORM\OneToMany(mappedBy: 'id_commander_2', targetEntity: March::class)]
    private Collection $marches2;

    public function __construct()
    {
        $this->marches1 = new ArrayCollection();
        $this->marches2 = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, March1>
     */
    public function getMarches1(): Collection
    {
        return $this->marches1;
    }

    public function addMarch1(March $march1): self
    {
        if (!$this->marches1->contains($march1)) {
            $this->marches1->add($march1);
            $march1->setIdCommander1($this);
        }

        return $this;
    }

    public function removeMarch1(March $march1): self
    {
        if ($this->marches1->removeElement($march1)) {
            // set the owning side to null (unless already changed)
            if ($march1->getIdCommander1() === $this) {
                $march1->setIdCommander1(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, March2>
     */
    public function getMarches2(): Collection
    {
        return $this->marches2;
    }

    public function addMarch2(March $march2): self
    {
        if (!$this->marches2->contains($march2)) {
            $this->marches2->add($march2);
            $march2->setIdCommander1($this);
        }

        return $this;
    }

    public function removeMarch2(March $march2): self
    {
        if ($this->marches2->removeElement($march2)) {
            // set the owning side to null (unless already changed)
            if ($march2->getIdCommander1() === $this) {
                $march2->setIdCommander1(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}
