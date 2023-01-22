<?php

namespace App\Entity;

use App\Repository\MarchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarchRepository::class)]
class March
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commander $id_commander_1 = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    private ?Commander $id_commander_2 = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    private ?Helm $helm = null;

    #[ORM\Column]
    private ?bool $iconic_helm = null;

    #[ORM\Column]
    private ?bool $crit_helm = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    private ?Chest $chest = null;

    #[ORM\Column]
    private ?bool $iconic_chest = null;

    #[ORM\Column]
    private ?bool $crit_chest = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    private ?Weapon $weapon = null;

    #[ORM\Column]
    private ?bool $iconic_weapon = null;

    #[ORM\Column]
    private ?bool $crit_weapon = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    private ?Glove $glove = null;

    #[ORM\Column]
    private ?bool $iconic_glove = null;

    #[ORM\Column]
    private ?bool $crit_glove = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    private ?Leg $leg = null;

    #[ORM\Column]
    private ?bool $iconic_leg = null;

    #[ORM\Column]
    private ?bool $crit_leg = null;

    #[ORM\ManyToOne(inversedBy: 'marches')]
    private ?Boot $boot = null;

    #[ORM\Column]
    private ?bool $iconic_boot = null;

    #[ORM\Column]
    private ?bool $crit_boot = null;

    #[ORM\ManyToOne(inversedBy: 'marches1')]
    private ?Accessory $accessory_1 = null;

    #[ORM\Column]
    private ?bool $iconic_accessory_1 = null;

    #[ORM\Column]
    private ?bool $crit_accessory_1 = null;

    #[ORM\ManyToOne(inversedBy: 'marches2')]
    private ?Accessory $accessory_2 = null;

    #[ORM\Column]
    private ?bool $iconic_accessory_2 = null;

    #[ORM\Column]
    private ?bool $crit_accessory_2 = null;

    #[ORM\Column]
    private ?\DateTime $updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdCommander1(): ?Commander
    {
        return $this->id_commander_1;
    }

    public function id_commander_1(): ?Commander
    {
        return $this->id_commander_1;
    }

    public function setIdCommander1(?Commander $id_commander_1): self
    {
        $this->id_commander_1 = $id_commander_1;

        return $this;
    }

    public function getIdCommander2(): ?Commander
    {
        return $this->id_commander_2;
    }

    public function id_commander_2(): ?Commander
    {
        return $this->id_commander_2;
    }

    public function setIdCommander2(?Commander $id_commander_2): self
    {
        $this->id_commander_2 = $id_commander_2;

        return $this;
    }

    public function getHelm(): ?Helm
    {
        return $this->helm;
    }

    public function setHelm(?Helm $helm): self
    {
        $this->helm = $helm;

        return $this;
    }

    public function isIconicHelm(): ?bool
    {
        return $this->iconic_helm;
    }

    public function iconic_helm(): ?bool
    {
        return $this->iconic_helm;
    }

    public function setIconicHelm(bool $iconic_helm): self
    {
        $this->iconic_helm = $iconic_helm;

        return $this;
    }

    public function isCritHelm(): ?bool
    {
        return $this->crit_helm;
    }

    public function crit_helm(): ?bool
    {
        return $this->crit_helm;
    }

    public function setCritHelm(bool $crit_helm): self
    {
        $this->crit_helm = $crit_helm;

        return $this;
    }

    public function getChest(): ?Chest
    {
        return $this->chest;
    }

    public function setChest(?Chest $chest): self
    {
        $this->chest = $chest;

        return $this;
    }

    public function isIconicChest(): ?bool
    {
        return $this->iconic_chest;
    }

    public function iconic_chest(): ?bool
    {
        return $this->iconic_chest;
    }

    public function setIconicChest(bool $iconic_chest): self
    {
        $this->iconic_chest = $iconic_chest;

        return $this;
    }

    public function isCritChest(): ?bool
    {
        return $this->crit_chest;
    }

    public function crit_chest(): ?bool
    {
        return $this->crit_chest;
    }

    public function setCritChest(bool $crit_chest): self
    {
        $this->crit_chest = $crit_chest;

        return $this;
    }

    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    public function setWeapon(?Weapon $weapon): self
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function isIconicWeapon(): ?bool
    {
        return $this->iconic_weapon;
    }

    public function iconic_weapon(): ?bool
    {
        return $this->iconic_weapon;
    }

    public function setIconicWeapon(bool $iconic_weapon): self
    {
        $this->iconic_weapon = $iconic_weapon;

        return $this;
    }

    public function isCritWeapon(): ?bool
    {
        return $this->crit_weapon;
    }

    public function crit_weapon(): ?bool
    {
        return $this->crit_weapon;
    }

    public function setCritWeapon(bool $crit_weapon): self
    {
        $this->crit_weapon = $crit_weapon;

        return $this;
    }

    public function getGlove(): ?Glove
    {
        return $this->glove;
    }

    public function setGlove(?Glove $glove): self
    {
        $this->glove = $glove;

        return $this;
    }

    public function isIconicGlove(): ?bool
    {
        return $this->iconic_glove;
    }

    public function iconic_glove(): ?bool
    {
        return $this->iconic_glove;
    }

    public function setIconicGlove(bool $iconic_glove): self
    {
        $this->iconic_glove = $iconic_glove;

        return $this;
    }

    public function isCritGlove(): ?bool
    {
        return $this->crit_glove;
    }

    public function crit_glove(): ?bool
    {
        return $this->crit_glove;
    }

    public function setCritGlove(bool $crit_glove): self
    {
        $this->crit_glove = $crit_glove;

        return $this;
    }

    public function getLeg(): ?Leg
    {
        return $this->leg;
    }

    public function setLeg(?Leg $leg): self
    {
        $this->leg = $leg;

        return $this;
    }

    public function isIconicLeg(): ?bool
    {
        return $this->iconic_leg;
    }

    public function iconic_leg(): ?bool
    {
        return $this->iconic_leg;
    }

    public function setIconicLeg(bool $iconic_leg): self
    {
        $this->iconic_leg = $iconic_leg;

        return $this;
    }

    public function isCritLeg(): ?bool
    {
        return $this->crit_leg;
    }

    public function crit_leg(): ?bool
    {
        return $this->crit_leg;
    }

    public function setCritLeg(bool $crit_leg): self
    {
        $this->crit_leg = $crit_leg;

        return $this;
    }

    public function getBoot(): ?Boot
    {
        return $this->boot;
    }

    public function setBoot(?Boot $boot): self
    {
        $this->boot = $boot;

        return $this;
    }

    public function isIconicBoot(): ?bool
    {
        return $this->iconic_boot;
    }

    public function iconic_boot(): ?bool
    {
        return $this->iconic_boot;
    }

    public function setIconicBoot(bool $iconic_boot): self
    {
        $this->iconic_boot = $iconic_boot;

        return $this;
    }

    public function isCritBoot(): ?bool
    {
        return $this->crit_boot;
    }

    public function crit_boot(): ?bool
    {
        return $this->crit_boot;
    }

    public function setCritBoot(bool $crit_boot): self
    {
        $this->crit_boot = $crit_boot;

        return $this;
    }

    public function getAccessory1(): ?Accessory
    {
        return $this->accessory_1;
    }

    public function accessory_1(): ?Accessory
    {
        return $this->accessory_1;
    }

    public function setAccessory1(?Accessory $accessory_1): self
    {
        $this->accessory_1 = $accessory_1;

        return $this;
    }

    public function isIconicAccessory1(): ?bool
    {
        return $this->iconic_accessory_1;
    }

    public function iconic_accessory_1(): ?bool
    {
        return $this->iconic_accessory_1;
    }

    public function setIconicAccessory1(bool $iconic_accessory_1): self
    {
        $this->iconic_accessory_1 = $iconic_accessory_1;

        return $this;
    }

    public function isCritAccessory1(): ?bool
    {
        return $this->crit_accessory_1;
    }

    public function crit_accessory_1(): ?bool
    {
        return $this->crit_accessory_1;
    }

    public function setCritAccessory1(bool $crit_accessory_1): self
    {
        $this->crit_accessory_1 = $crit_accessory_1;

        return $this;
    }

    public function getAccessory2(): ?Accessory
    {
        return $this->accessory_2;
    }

    public function accessory_2(): ?Accessory
    {
        return $this->accessory_2;
    }

    public function setAccessory2(?Accessory $accessory_2): self
    {
        $this->accessory_2 = $accessory_2;

        return $this;
    }

    public function isIconicAccessory2(): ?bool
    {
        return $this->iconic_accessory_2;
    }

    public function iconic_accessory_2(): ?bool
    {
        return $this->iconic_accessory_2;
    }

    public function setIconicAccessory2(bool $iconic_accessory_2): self
    {
        $this->iconic_accessory_2 = $iconic_accessory_2;

        return $this;
    }

    public function isCritAccessory2(): ?bool
    {
        return $this->crit_accessory_2;
    }

    public function crit_accessory_2(): ?bool
    {
        return $this->crit_accessory_2;
    }

    public function setCritAccessory2(bool $crit_accessory_2): self
    {
        $this->crit_accessory_2 = $crit_accessory_2;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function updated_at(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTime $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
