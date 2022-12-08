<?php

require_once("dbh.class.php");

class ViewArenas extends Dbh{

    public function getArenas():array{ //Retourne la liste des arènes de notre BDD
        
        $sql = "SELECT * FROM arenas"; // On prépare la reqûete
        $stmt = $this->connect()->query($sql); // On effectue la requetes en se connectant à la BDD
        while($arenasList = $stmt->fetchAll()){ //retourne un tableau des resultats obtenu de notre reqûete. 
           return $arenasList; //Retourne le tableau, qui sera appeller lors d'une instance
        }
    }
}