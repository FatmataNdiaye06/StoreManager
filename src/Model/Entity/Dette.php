<?php

class Dette{
    private int $idDette;
    private \DateTime $date;
    private Vente $idVente;
    private float $montantInitial;
    private float $montantVerser;

    public function getIdDette():int{
      return $this->idDette;
    }
    public function getDate():\DateTime{
      return $this->date;
    }
    public function getIdVente():Vente{
      return $this->idVente;
    }
    public function getMontantInitial():float{
      return $this->montantInitial;
    }
    public function getMontantVerser():float{
      return $this->montantVerser;
    }

    public function setVente(Vente $idVente): void {
        $this->idVente = $idVente; 
    }

    public function setMontantInitial(float $montantInitial): void {
        if ($montantInitial <= 0) {
            throw new Exception("Le montant initial doit être supérieur à zéro.");
        }
        $this->montantInitial = $montantInitial;
    }

    public function setMontantVerser(float $montantVerser): void {
        if ($montantVerser < 0) {
            throw new Exception("Le montant versé ne peut pas être négatif.");
        }
        $this->montantVerser = $montantVerser;
    }
     public function setDate(?\DateTime $date=null): void {
       
        $this->date = $date ?? new \DateTime(); 
    }

    public function getResteAPayer(): float {
        return $this->montantInitial - $this->montantVerser;
    }

    public function __construct(Vente $vente,float $montantInitial, float $montantVerser = 0.0,
        ?\DateTime $date = null
    ) 
    {
        $this->setVente($vente);
        $this->setMontantInitial($montantInitial);
        $this->setMontantVerser($montantVerser);
        $this->setDate($date); 
    }
}