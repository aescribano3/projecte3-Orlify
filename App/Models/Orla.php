<?php

namespace App\Models;

class Orla
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }
    public function createorla($name, $grup, $orla) {
        $stm = $this->sql->prepare('INSERT INTO orla (name, idGrup, idPlantilla) 
        VALUES (:name, :grup, :orla)');
        $stm->execute([
            'name' => $name, 
            'grup' => $grup, 
            'orla' => $orla,
        ]);
        return $this->sql->lastInsertId();
    }

    public function getAll(){
        $orles = array();
        $query = "SELECT * FROM orla;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $orla) {
            $orles[] = $orla;
        }

        return $orles;
    }
    public function updateOrla($idOrla, $name, $idGrup, $idPlantilla) {
        $stm = $this->sql->prepare('UPDATE orla SET name = :name, idGrup = :idGrup, idPlantilla = :idPlantilla WHERE idOrla = :idOrla');
        $stm->execute([
            'idOrla' => $idOrla,
            'name' => $name,
            'idGrup' => $idGrup,
            'idPlantilla' => $idPlantilla,
        ]);
        return $stm->rowCount();
    }
    public function dropOrla($idOrla) {
        $stm = $this->sql->prepare('DELETE FROM orla WHERE idOrla = :idOrla');
        $stm->execute([
            'idOrla' => $idOrla,
        ]);
        return $stm->rowCount();
    }
}