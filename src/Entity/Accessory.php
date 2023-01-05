<?php

namespace App\Entity;

use App\Repository\AccessoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccessoryRepository::class)]
class Accessory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'accessory_1', targetEntity: March::class)]
    private Collection $marches1;

    #[ORM\OneToMany(mappedBy: 'accessory_2', targetEntity: March::class)]
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
     * @return Collection<int, March>
     */
    public function getMarches1(): Collection
    {
        return $this->marches1;
    }

    public function addMarches1(March $marches1): self
    {
        if (!$this->marches1->contains($marches1)) {
            $this->marches1->add($marches1);
            $marches1->setAccessory1($this);
        }

        return $this;
    }

    public function removeMarches1(March $marches1): self
    {
        if ($this->marches1->removeElement($marches1)) {
            // set the owning side to null (unless already changed)
            if ($marches1->getAccessory1() === $this) {
                $marches1->setAccessory1(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, March>
     */
    public function getMarches2(): Collection
    {
        return $this->marches2;
    }

    public function addMarches2(March $marches2): self
    {
        if (!$this->marches2->contains($marches2)) {
            $this->marches2->add($marches2);
            $marches2->setAccessory2($this);
        }

        return $this;
    }

    public function removeMarches2(March $marches2): self
    {
        if ($this->marches2->removeElement($marches2)) {
            // set the owning side to null (unless already changed)
            if ($marches2->getAccessory2() === $this) {
                $marches2->setAccessory2(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}
