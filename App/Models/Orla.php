<?php

namespace App\Models;

class Orla
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

/**
 * [createorla creates an orla]
 *
 * @param   [String]  $name           [$name name of the orla]
 * @param   [String]  $grup           [$grup group to which it belongs]
 * @param   [String]  $orla           [$orla]
 * @return  [][][]                      [return returns the id of the last insertion]
 */


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

/**
 * [getuserorlas returns the orlas of a user]
 *
 * @param   [Int]  $id           [$id user id]
 * @return  [][][]                      [return returns the id of the last insertion]
 */

    public function getuserorlas($id){
        $query = $this->sql->prepare('SELECT orla.idOrla, grup.name FROM orla JOIN grup ON orla.idGrup = grup.idGrup JOIN grupuser ON grupuser.idGrup = grup.idGrup WHERE grupuser.idUser=:id');
        $query->execute([':id' => $id]);
    
        return $query->fetchAll(\PDO::FETCH_ASSOC);}
    
/**
 * [getAll returns all orlas]
 *
 * @return  [][][]                      [return returns the orlas in an array]
 */


    public function getAll(){
        $orles = array();
        $query = "SELECT * FROM orla;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $orla) {
            $orles[] = $orla;
        }

        return $orles;
    }
  /**
 * [updateOrla allows updating orlas]
 *
 * @param   [Int]       $idOrla       [$idOrla orla id]
 * @param   [String]    $name         [$name name of the orla]
 * @param   [Int]       $idGrup       [$idGrup group id to which it belongs]
 * @param   [Int]       $idPlantilla  [$idPlantilla template id to which it belongs]
 *
 * @return  []                         [return description]
 */

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
    
/**
 * [dropOrla deletes an orla by id]
 *
 * @param   [Int]  $idOrla  [$idOrla orla id to be deleted]
 *
 * @return  []               [return description]
 */

    public function dropOrla($idOrla) {
        $stm = $this->sql->prepare('DELETE FROM orla WHERE idOrla = :idOrla');
        $stm->execute([
            'idOrla' => $idOrla,
        ]);
        return $stm->rowCount();
    }
/**
 * [getorla gets an orla by id]
 *
 * @param   [Int]  $idOrla  [$idOrla orla to search for]
 *
 * @return  []               [return returns the orlas of a group]
 */

    public function getorla($id){
        $query = $this->sql->prepare('SELECT * FROM orla WHERE idgrup = :id');
        $query->execute([':id' => $id]);
    
        return $query->fetchAll(\PDO::FETCH_ASSOC);}
}   


    