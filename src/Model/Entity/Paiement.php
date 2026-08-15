<?php
class Paiement{
   private int $idPaiement;    
   private float $montantPayer;   
   private Vente $idVente;  
   private ModeDePaiement $idModePaiement;


    public function getIdPaiement(): int {
        return $this->idPaiement;
    }

    public function getMontantPayer(): float {
        return $this->montantPayer;
    }

    public function getIdVente(): Vente {
        return $this->idVente;
    }

    public function getIdModePaiement(): ModeDePaiement {
        return $this->idModePaiement;
    }


    public function setMontantPayer(float $montantPayer): void {
        if ($montantPayer <= 0) {
            throw new Exception("Le montant payé doit être  supérieur à zéro.");
        }
        $this->montantPayer = $montantPayer;
    }

     public function setVente(Vente $idVente): void {
        $this->idVente = $idVente;
    }

    public function setModePaiement(ModeDePaiement $idModePaiement): void {
        $this->idModePaiement = $idModePaiement;
    }
}

