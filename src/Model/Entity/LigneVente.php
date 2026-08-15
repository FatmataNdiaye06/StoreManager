<?php

class LigneVente{
   private int $idLigneVente;
   private int $qteVendue;
   private float $prixVente;
   private float $sousTotal;
   private Vente $idVente;
   private Produit $idProduit;

   public function getIdLigneVente(): ?int {
        return $this->idLigneVente;
    }

    public function getQteVendue(): int {
        return $this->qteVendue;
    }

    public function getPrixVente(): float {
        return $this->prixVente;
    }

    public function getSousTotal(): float {
        return $this->sousTotal;
    }

    public function getIdVente(): Vente {
        return $this->idVente;
    }

    public function getIdProduit(): Produit {
        return $this->idProduit;
    }

    
    public function setQteVendue(int $qteVendue): void {
        if ($qteVendue <= 0) {
            throw new Exception("La quantité vendue doit être supérieure à zéro.");
        }
        $this->qteVendue = $qteVendue;
    }

    public function setPrixVente(float $prixVente): void {
        if ($prixVente <= 0) {
            throw new Exception("Le prix de vente doit être  supérieur à zéro.");
        }
        $this->prixVente = $prixVente;
    }

    public function setVente(Vente $idVente): void {
        $this->idVente = $idVente;
    }

    public function setProduit(Produit $idProduit): void {
        $this->idProduit = $idProduit;
    }


}
