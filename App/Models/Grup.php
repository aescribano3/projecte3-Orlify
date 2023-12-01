<?php

namespace App\Models;

class Grup
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function getAll(){
        $grups = array();
        $query = "SELECT * FROM grup;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $grup) {
            $grups[] = $grup;
        }

        return $grups;
    }

    public function getGrupData($id){
        $stm = $this->sql->prepare("select * from grup where idGrup=:id;");
        $stm -> execute([':id' => $id]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if($result){
            return $result;
        } else {
            return false;
        }
    }

    public function createGrup($grupname, $grupcurs, $grupteacher){
        
        $stm = $this->sql->prepare("INSERT INTO grup (name, curs, idTeacher) VALUES (:grupname, :grupcurs, :grupteacher);");
        
        $stm -> execute([
            ':grupname' => $grupname, 
            ':grupcurs' => $grupcurs, 
            ':grupteacher' => $grupteacher
        ]);
        
        return $stm;
        
    }

    public function modifiGrup($id, $grupname, $grupcurs, $grupteacher){
        
        $stm = $this->sql->prepare("UPDATE grup SET name=:grupname, curs=:grupcurs, idTeacher=:grupteacher WHERE idGrup=:id;");
        
        $stm -> execute([
            ':id' => $id,
            ':grupname' => $grupname, 
            ':grupcurs' => $grupcurs, 
            ':grupteacher' => $grupteacher
        ]);
        
        return $stm;
        
    }

    public function dropGrup($id){
        
        $stm = $this->sql->prepare("DELETE FROM grup WHERE idGrup=:id;");
        
        $stm -> execute([
            ':id' => $id
        ]);
        
        return $stm;
        
    }

}