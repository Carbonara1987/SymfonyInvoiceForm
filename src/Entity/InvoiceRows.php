<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRowsRepository")
 */
class InvoiceRows
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $InvoiceID;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantity;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $Value;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $VAT;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $TotalValue;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceID(): ?int
    {
        return $this->InvoiceID;
    }

    public function setInvoiceID(int $InvoiceID): self
    {
        $this->InvoiceID = $InvoiceID;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->Value;
    }

    public function setValue(string $Value): self
    {
        $this->Value = $Value;

        return $this;
    }

    public function getVAT(): ?int
    {
        return $this->VAT;
    }

    public function setVAT(int $VAT): self
    {
        $this->VAT = $VAT;

        return $this;
    }

    public function getTotalValue(): ?string
    {
        return $this->TotalValue;
    }

    public function setTotalValue(string $TotalValue): self
    {
        $this->TotalValue = $TotalValue;

        return $this;
    }

}
