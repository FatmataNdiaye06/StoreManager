<?php

class Approvisionnement{
    private int $idApprovisionnement ;
    private string $refBl ;
    private float $valeurLot; 
    private Fournisseur $fournisseur;

    public function getIdApprovisionnement(): int {
        return $this->idApprovisionnement;
    }

    public function getRefBl(): string {
        return $this->refBl;
    }

    public function getValeurLot(): float {
        return $this->valeurLot;
    }

    public function getFournisseur(): Fournisseur {
        return $this->fournisseur;
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

    public function setFournisseur(Fournisseur $fournisseur): void {
        $this->fournisseur = $fournisseur;
    }

     public function __construct(int $idApprovisionnement,string $refBl,float $valeurLot,
     Fournisseur $fournisseur)
   {
      $this->setRefBl($refBl);
      $this->setValeurLot($valeurLot);
      $this->setFournisseur($fournisseur);

   }
}

