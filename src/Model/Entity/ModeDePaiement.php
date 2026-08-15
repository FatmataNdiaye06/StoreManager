<?php

class ModeDePaiement{
   private int $idModePaiement;
   private float $libelle;

   public function getIdModePaiement(): int {
        return $this->idModePaiement;
    }

    public function getLibelle(): string {
        return $this->libelle;
    }

   
    public function setLibelle(string $libelle): void {
        if (empty($libelle)) {
            throw new Exception("Le libellé du rôle ne peut pas être vide.");
        }
        $this->libelle =$libelle;
    }

   

}