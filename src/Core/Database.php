<?php

class Database{
    private static ?PDO $pdo = null;

    private function __construct(){

    }
    private function __clone(){
        
    }

    public static function getConnexion():PDO{
        if(self::$pdo == null){

            try {

                self::$pdo = new PDO(
                        "pgsql:host=localhost;dbname=storemanager;port=5432",
                        "postgres",
                        "postgres"
                    );
                    echo 'connexion postgres';
                  
            } 
            catch (\Throwable $th) {
                self::$pdo = new PDO("sqlite:".dirname(__DIR__,2)."/erp.db");
               echo 'connexion sqlite';
            }
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            }
     return self::$pdo; 
    }

}




