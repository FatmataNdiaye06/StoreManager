<?php
class Paiement{
   private int $idPaiement;    
   private float $montantPayer;   
   private Vente $vente;  
   private ModeDePaiement $modePaiement;


    public function getIdPaiement(): int {
        return $this->idPaiement;
    }

    public function getMontantPayer(): float {
        return $this->montantPayer;
    }

    public function getvente(): Vente {
        return $this->vente;
    }

    public function getModePaiement(): ModeDePaiement {
        return $this->modePaiement;
    }


    public function setMontantPayer(float $montantPayer): void {
        if ($montantPayer <= 0) {
            throw new Exception("Le montant payé doit être  supérieur à zéro.");
        }
        $this->montantPayer = $montantPayer;
    }

     public function setVente(Vente $vente): void {
        $this->vente = $vente;
    }

    public function setModePaiement(ModeDePaiement $modePaiement): void {
        $this->modePaiement = $modePaiement;
    }

     public function __construct(float $montantPayer,Vente $vente,ModeDePaiement $modePaiement){

        $this->setMontantPayer($montantPayer);
        $this->setVente($vente);
        $this->setModePaiement($modePaiement);

    }
}

