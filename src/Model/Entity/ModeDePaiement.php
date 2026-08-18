<?php

class ModeDePaiement{
   private int $idModePaiement;
   private string $libelle;

   public function getIdModePaiement(): int {
        return $this->idModePaiement;
    }

    public function getLibelle(): string {
        return $this->libelle;
    }

   
    public function setLibelle(string $libelle): void {
        if (empty($libelle)) {
            throw new Exception("Le libellé est obligatoire.");
        }
        $this->libelle =$libelle;
    }

    public function __construct(string $libelle){

        $this->setLibelle($libelle);
    }
   

}