<?php

class Vente{
    private int $idVente;
    private float $montantTotal=0;
    private float $montantVerser;
    private Client $client;
    private array $lignesVentes=[];


    public function getIdVente(): int {
        return $this->idVente;
    }

    public function getMontantTotal(): float {
        $this->montantTotal=0;
        foreach ($this->lignesVentes as $ligne) {
            $this->montantTotal+=$ligne->getSousTotal();
        }
        return $this->montantTotal;
    }

    public function getMontantVerser(): float {
        return $this->montantVerser;
    }

    public function getClient(): Client {
        return $this->client;
    }
     public function getResteAPayer(): float {
        return $this->getMontantTotal() - $this->montantVerser;
    }

   

    public function setMontantVerser(float $montantVerser): void {
        if ($montantVerser < 0) {
            throw new Exception("Le montant versé ne peut pas être négatif.");
        }
        
        $this->montantVerser = $montantVerser;
    }
    public function ajouterLigneVente(LigneVente $ligne): void {
        $this->lignesVentes[] = $ligne;
    }

    public function setClient(Client $client): void {
        $this->client = $client;
    }

     public function __construct(float $montantVerser,Client $client){

        $this->setMontantVerser($montantVerser);
        $this->setClient($client);

    }
}


