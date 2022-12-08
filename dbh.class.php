<?php

class Dbh {
    //identifiant de la BDD
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "soccer";

    protected function connect(){ //Méthode appelé pour se connecter à la BDD et faire des requêtes
        
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // FETCH_ASSOC : retourne un tableau indexé par le nom de la colonne
        return $pdo;
    }
}