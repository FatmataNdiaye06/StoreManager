<?php

class Produit{
    private int $idProduit ;
    private string $libelle ;
    private int $qteStock ; 
    private float $prix ;

    public function getIdProduit():int{
        return $this->idProduit;
    }

    public function getLibelle():string{
        return $this->libelle;
    }

    public function getQteStock():int{
        return $this->qteStock;
    }

    public function getPrix():float{
        return $this->prix;
    }

    public function setPrix(float $prix):void{
        if ($prix<=0) {
            throw new Exception("Le prix doit etre positif");
        }   
        $this->prix = $prix;
    }

    public function setLibelle(string $libelle):void{
        if (empty($libelle)) {
            throw new Exception("Le libelle ne doit pas etre vide");
        }
        $this->libelle = $libelle;
    }

    public function setQteStock(int $qteStock):void{
        if ($qteStock<0) {
            throw new Exception("Le quantite doit etre superieur ou egal à 0");
        }
        $this->qteStock = $qteStock;
    }

    public function __construct(?int $idProduit = null,string $libelle="",int $qteStock=0,float $prix){
        $this->idProduit = $idProduit;
        $this->setPrix($prix);
        $this->setLibelle($libelle);
        $this->setQteStock($qteStock);
    }
    public function estDisponible(int $qteDemander):bool{
        if ($this->qteStock>=$qteDemander) {
            return true;
        } 
        return false;  
    }
}


// $produit= new Produit(1,"Lait",2,3000);
// var_dump($produit);die;

