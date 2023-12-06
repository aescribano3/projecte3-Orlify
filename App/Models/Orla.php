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
    public function getorla($id){
        $query = $this->sql->prepare('SELECT * FROM orla WHERE idUser = :id');
        $query->execute([':id' => $id]);
    
        return $query->fetchAll(\PDO::FETCH_ASSOC);}
}   
