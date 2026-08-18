<?php

class Role{
    private int $idRole ;
    private string $libelle ;

    public function getIdRole(): int {
        return $this->idRole;
    }

    
    public function getLibelle(): string {
        return $this->libelle;
    }


    public function setLibelle(string $libelle): void {
        if (empty($libelle)) {
            throw new Exception("L'état est obligatoire.");
        }
        $this->libelle = $libelle;
    }


     public function __construct(string $libelle){

        $this->setLibelle($libelle);
    }
}
