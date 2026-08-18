<?php

class LigneVente{
   private int $idLigneVente;
   private int $qteVendue;
   private float $prixVente;
   private float $sousTotal;
   private Vente $vente;
   private Produit $produit;

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

    public function getvente(): Vente {
        return $this->vente;
    }

    public function getproduit(): Produit {
        return $this->produit;
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
 private function setSousTotal(float $prixVente,int $qteVendue): void {
            $this->setPrixVente($prixVente);
            $this->setQteVendue($qteVendue);
            $this->sousTotal=$this->prixVente * $this->qteVendue;
      
    }
    public function setVente(Vente $vente): void {
        $this->vente = $vente;
    }

    public function setProduit(Produit $produit): void {
        $this->produit = $produit;
    }

  public function __construct(int $qteVendue,float $prixVente,
    Vente $vente,Produit $produit){

        $this->setSousTotal($prixVente, $qteVendue);
        $this->setVente($vente);
        $this->setProduit($produit);

    }
}
