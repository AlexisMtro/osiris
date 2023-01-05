<?php

namespace App\Entity;

use App\Repository\BootRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BootRepository::class)]
class Boot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'boot', targetEntity: March::class)]
    private Collection $marches;

    public function __construct()
    {
        $this->marches = new ArrayCollection();
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
    public function getMarches(): Collection
    {
        return $this->marches;
    }

    public function addMarch(March $march): self
    {
        if (!$this->marches->contains($march)) {
            $this->marches->add($march);
            $march->setBoot($this);
        }

        return $this;
    }

    public function removeMarch(March $march): self
    {
        if ($this->marches->removeElement($march)) {
            // set the owning side to null (unless already changed)
            if ($march->getBoot() === $this) {
                $march->setBoot(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}
