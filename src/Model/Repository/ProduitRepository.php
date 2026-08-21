<?php

// require_once dirname(__DIR__)."/Entity/Produit.php";
// require_once "UsePdoRepository.php";

namespace App\Model\Repository;
use App\Entity\Produit;
 class ProduitRepository{
    private function __construct(){
    }
    public static function getAllProduits():array{
        $sql="SELECT * FROM produit";
        $produits=DATABASE::query($sql, false); 
        
        $ObjectProduits=self::arrayToObject($produits);

        return $ObjectProduits;   
 
    } 

    public static function arrayToObject(array $array):array{
         $ObjectProduits=[];                                          
         foreach ($array as $ligne){
             $ObjectProduits[] = new Produit((int)$ligne['id_produit'],
             $ligne['libelle'],$ligne['qte_stock'],$ligne['prix']
             );
         }
         return $ObjectProduits;
     }
  
}


 
 $liste = ProduitRepository::getAllProduits();
 var_dump($liste);die;
