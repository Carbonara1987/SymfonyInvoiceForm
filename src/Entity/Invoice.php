<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
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
    private $InvoiceNumber;

    /**
     * @ORM\Column(type="date")
     */
    private $InvoiceDate;


    /**
     * @ORM\Column(type="integer")
     */
    private $ClientID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceNumber(): ?int
    {
        return $this->InvoiceNumber;
    }

    public function setInvoiceNumber(int $InvoiceNumber): self
    {
        $this->InvoiceNumber = $InvoiceNumber;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTimeInterface
    {
        return $this->InvoiceDate;
    }

    public function setInvoiceDate(\DateTimeInterface $InvoiceDate): self
    {
        $this->InvoiceDate = $InvoiceDate;

        return $this;
    }

    public function getClientID(): ?int
    {
        return $this->ClientID;
    }

    public function setClientID(int $ClientID): self
    {
        $this->ClientID = $ClientID;

        return $this;
    }
}
