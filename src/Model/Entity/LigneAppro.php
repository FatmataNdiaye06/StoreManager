<?php
class LigneAppro{
   private int $idLigneAppro;
   private int $qteAppro ; 
   private int $qteRecu ; 
   private float $prixAchat ; 
   private float $sousTotal ; 
   private Approvisionnement $approvisionnement ;
   private Produit $produit;

   public function getIdLigneAppro(): int {
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
        return $this->approvisionnement;
    }

    public function getProduit(): Produit {
        return $this->produit;
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
    private function setSousTotal(float $prixAchat,int $qteAppro): void {
            $this->setPrixAchat($prixAchat);
            $this->setQteAppro($qteAppro);
            $this->sousTotal=$this->prixAchat * $this->qteAppro;
      
    }
     public function setApprovisionnement(Approvisionnement $approvisionnement): void {
        $this->approvisionnement = $approvisionnement;
    }

    public function setProduit(Produit $produit): void {
        $this->produit = $produit;
    }

    public function __construct(int $qteAppro,int $qteRecu,float $prixAchat,
    Approvisionnement $approvisionnement,Produit $produit){

        $this->setQteRecu($qteRecu);
        $this->setApprovisionnement($approvisionnement);
        $this->setProduit($produit);
        $this->setSousTotal($prixAchat, $qteAppro);

    }
}

