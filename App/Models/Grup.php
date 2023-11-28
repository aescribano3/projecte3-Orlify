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
        
        return $this->sql->lastInsertId();
        
    }

}