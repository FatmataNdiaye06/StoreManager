<?php

class Approvisionnement{
    private int $idApprovisionnement ;
    private string $refBl ;
    private float $valeurLot; 
    private string $statut ;
    private Fournisseur $idFournisseur;

    public function getIdApprovisionnement(): int {
        return $this->idApprovisionnement;
    }

    public function getRefBl(): string {
        return $this->refBl;
    }

    public function getValeurLot(): float {
        return $this->valeurLot;
    }

    public function getStatut(): string {
        return $this->statut;
    }

    public function getIdFournisseur(): Fournisseur {
        return $this->idFournisseur;
    }

    public function setRefBl(string $refBl): void {
        if (empty($refBl)) {
            throw new Exception("La BL est obligatoire.");
        }
        $this->refBl = $refBl;
    }

    public function setValeurLot(float $valeurLot): void {
        if ($valeurLot < 0) {
            throw new Exception("La valeur du lot doit être supérieure ou égale à zéro.");
        }
        $this->valeurLot = $valeurLot;
    }

    public function setStatut(string $statut): void {
        if (empty(trim($statut))) {
            throw new Exception("Le statut ne peut pas être vide.");
        }
        $this->statut = $statut;
    }
      public function setIdFournisseur(Fournisseur $fournisseur): void {
        $this->idFournisseur = $fournisseur;
    }

}

