<?php

class Vente{
    private int $idVente;
    private float $montantTotal;
    private float $montantVerser;
    private Client $idClient;


    public function getIdVente(): int {
        return $this->idVente;
    }

    public function getMontantTotal(): float {
        return $this->montantTotal;
    }

    public function getMontantVerser(): float {
        return $this->montantVerser;
    }

    public function getClient(): Client {
        return $this->idClient;
    }

    public function setMontantTotal(float $montantTotal): void {
        if ($montantTotal < 0) {
            throw new Exception("Le montant total doit être supérieur ou égal à zéro.");
        }
        $this->montantTotal = $montantTotal;
    }

    public function setMontantVerser(float $montantVerser): void {
        if ($montantVerser < 0) {
            throw new Exception("Le montant versé ne peut pas être négatif.");
        }
        
        $this->montantVerser = $montantVerser;
    }

    public function setIdClient(Client $idClient): void {
        $this->idClient = $idClient;
    }

}


