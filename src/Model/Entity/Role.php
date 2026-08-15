<?php

class Role{
    private int $idRole ;
    private string $etat ;

    public function getIdRole(): int {
        return $this->idRole;
    }

    
    public function getEtat(): string {
        return $this->etat;
    }


    public function setEtat(string $etat): void {
        if (empty($etat)) {
            throw new Exception("L'état est obligatoire.");
        }
        $this->etat = $etat;
    }
}
