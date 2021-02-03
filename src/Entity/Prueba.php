<?php

namespace App\Entity;

use App\Repository\PruebaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PruebaRepository::class)
 */
class Prueba
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $campo1;

    /**
     * @ORM\Column(type="integer")
     */
    private $campo2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCampo1(): ?string
    {
        return $this->campo1;
    }

    public function setCampo1(?string $campo1): self
    {
        $this->campo1 = $campo1;

        return $this;
    }

    public function getCampo2(): ?int
    {
        return $this->campo2;
    }

    public function setCampo2(int $campo2): self
    {
        $this->campo2 = $campo2;

        return $this;
    }
}
