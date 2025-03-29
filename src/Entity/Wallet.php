<?php

namespace App\Entity;

use App\Repository\WalletRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: WalletRepository::class)]
class Wallet
{
    public function __construct()
    {
        $this->transactions = new ArrayCollection();
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $solde;

    #[ORM\OneToMany(mappedBy: 'wallet', targetEntity: Transaction::class, cascade: ['persist', 'remove'])]
    private Collection $transactions;

    #[ORM\OneToOne(inversedBy: 'wallet', targetEntity: Membre::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Membre $membre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getMembre(): ?Membre
    {
        return $this->membre;
    }

    public function setMembre(?Membre $membre): self
    {
        $this->membre = $membre;

        return $this;
    }

    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    public function addTransaction(Transaction $transaction): self
{
    if (!$this->transactions->contains($transaction)) {
        $this->transactions->add($transaction);
        $transaction->setWallet($this);
    }

    return $this;
}

public function removeTransaction(Transaction $transaction): self
{
    if ($this->transactions->removeElement($transaction)) {
        // Set the owning side to null (unless already changed)
        if ($transaction->getWallet() === $this) {
            $transaction->setWallet(null);
        }
    }

    return $this;
}

}
