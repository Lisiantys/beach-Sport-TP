<?php

require_once("dbh.class.php");

class ViewArenas extends Dbh{

    public function getArenas(){
        
        $sql = "SELECT * FROM arenas";
        $stmt = $this->connect()->query($sql);
        while($arenasList = $stmt->fetchAll()){
           return $arenasList;
        }
    }
}