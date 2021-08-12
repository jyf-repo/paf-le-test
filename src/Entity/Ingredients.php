<?php

namespace App\Entity;

use App\Repository\IngredientsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngredientsRepository::class)
 */
class Ingredients
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
    private $common_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $botanic_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $family;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $use_part;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $under_group;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommonName(): ?string
    {
        return $this->common_name;
    }

    public function setCommonName(string $common_name): self
    {
        $this->common_name = $common_name;

        return $this;
    }

    public function getBotanicName(): ?string
    {
        return $this->botanic_name;
    }

    public function setBotanicName(string $botanic_name): self
    {
        $this->botanic_name = $botanic_name;

        return $this;
    }

    public function getFamily(): ?string
    {
        return $this->family;
    }

    public function setFamily(string $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getUsePart(): ?string
    {
        return $this->use_part;
    }

    public function setUsePart(string $use_part): self
    {
        $this->use_part = $use_part;

        return $this;
    }

    public function getUnderGroup(): ?string
    {
        return $this->under_group;
    }

    public function setUnderGroup(string $under_group): self
    {
        $this->under_group = $under_group;

        return $this;
    }
}
