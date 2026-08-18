<?php

require_once dirname(__DIR__)."/Entity/Produit.php";
require_once "UsePdoRepository.php";


 class ProduitRepository{
   private UsePdoRepository $pdoRepo;
    public function __construct(){
         $this->pdoRepo= new UsePdoRepository();  
    }
    public function getAllProduits():array{
        $sql="SELECT * FROM produit";
        $produits=$this->pdoRepo->query($sql,false); 
        $ObjectProduits=$this->arrayToObject($produits);

        return $ObjectProduits;   
 
    } 

    
     public function arrayToObject(array $array):array{
         $ObjectProduits=[];                                          
         foreach ($array as $ligne){
             $ObjectProduits[] = new Produit((int)$ligne['id_produit'],
             $ligne['libelle'],$ligne['qte_stock'],$ligne['prix']
             );
         }
         return $ObjectProduits;
     }
  
}


 $repo = new ProduitRepository();
 $liste = $repo->getAllProduits();
 var_dump($liste);die;
