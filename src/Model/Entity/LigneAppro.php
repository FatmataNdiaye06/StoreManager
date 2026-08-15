<?php
class LigneAppro{
   private int $idLigneAppro;
   private int $qteAppro ; 
   private int $qteRecu ; 
   private float $prixAchat ; 
   private float $sousTotal ; 
   private Approvisionnement $idApprovisionnement ;
   private Produit $idProduit;

   public function getIdLigneAppro(): ?int {
        return $this->idLigneAppro;
    }

    public function getQteAppro(): int {
        return $this->qteAppro;
    }

    public function getQteRecu(): int {
        return $this->qteRecu;
    }

    public function getPrixAchat(): float {
        return $this->prixAchat;
    }

    public function getSousTotal(): float {
        return $this->sousTotal;
    }

    public function getApprovisionnement(): Approvisionnement {
        return $this->idApprovisionnement;
    }

    public function getProduit(): Produit {
        return $this->idProduit;
    }


    public function setQteAppro(int $qteAppro): void {
        if ($qteAppro <= 0) {
            throw new Exception("La quantité d'approvisionnement doit être  supérieure à zéro.");
        }
        $this->qteAppro = $qteAppro;
    }

    public function setQteRecu(int $qteRecu): void {
        if ($qteRecu < 0) {
            throw new Exception("La quantité reçue doit etre positif.");
        }
        $this->qteRecu = $qteRecu;
    }

    public function setPrixAchat(float $prixAchat): void {
        if ($prixAchat <= 0) {
            throw new Exception("Le prix d'achat doit être supérieur à zéro.");
        }
        $this->prixAchat = $prixAchat;
    }

     public function setApprovisionnement(Approvisionnement $idApprovisionnement): void {
        $this->idApprovisionnement = $idApprovisionnement;
    }

    public function setProduit(Produit $idProduit): void {
        $this->idProduit = $idProduit;
    }
}