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

    
    public function getuserorlas($id){
        $query = $this->sql->prepare('SELECT orla.idOrla, grup.name FROM orla JOIN grup ON orla.idGrup = grup.idGrup JOIN grupuser ON grupuser.idGrup = grup.idGrup WHERE grupuser.idUser=:id');
        $query->execute([':id' => $id]);
    
        return $query->fetchAll(\PDO::FETCH_ASSOC);}
    


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

    public function getorla($id){
        $query = $this->sql->prepare('SELECT * FROM orla WHERE idgrup = :id');
        $query->execute([':id' => $id]);
    
        return $query->fetchAll(\PDO::FETCH_ASSOC);}

    public function getUserOrla($idOrla){
        $query = $this->sql->prepare('SELECT users.name, users.lastname,imgs.url FROM orla 
                                      JOIN grup ON orla.idGrup = grup.idGrup 
                                      JOIN grupuser ON grupuser.idGrup = grup.idGrup 
                                      JOIN users ON users.idUser = grupuser.idUser 
                                      JOIN imgs on imgs.idUser= users.idUser WHERE orla.idOrla = :idOrla and imgs.Selecionada = 1;');
        $query->execute([':idOrla' => $idOrla]);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    

}   