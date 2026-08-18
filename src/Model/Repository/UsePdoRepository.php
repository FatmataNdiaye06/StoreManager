<?php

require_once(dirname(__DIR__,2))."/Core/Database.php";

class UsePdoRepository{
    private  PDO $pdo;
    private string $sql;
    private bool $single;

    public function __construct(){
        $this->pdo=Database::getConnexion();
    }

    public function query($sql,$single = true): array {
        $query = $this->pdo->query($sql);
        $result = $single ? $query->fetch(PDO::FETCH_ASSOC) : $query->fetchAll(PDO::FETCH_ASSOC);
        return $result !== false ? $result : [];
    }

}

