<?php

class Database{
    private static ?PDO $pdo = null;

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
                self::$pdo = new PDO("sqlite:".dirname(dirname(__DIR__))."/erp.db");
               echo 'connexion sqlite';
            }
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            }
     return self::$pdo; 
    }
}

Database::getConnexion();



