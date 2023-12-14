<?php

namespace App\Models;

class GrupUser
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function getidGrup($idUser) {
        $stm = $this->sql->prepare("SELECT idGrup FROM grupuser WHERE idUser=:idUser;");
        $stm -> execute([':idUser' => $idUser]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function getNameGrup($idUser, $idGrup) {
        $stm = $this->sql->prepare("SELECT g.idGrup, g.idUser, gp.name, gp.curs FROM grupuser g JOIN grup gp ON gp.idGrup = g.idGrup WHERE g.idUser = :idUser AND g.idGrup = :idGrup ORDER BY gp.curs DESC LIMIT 1;");
        $stm->execute([':idUser' => $idUser, ':idGrup' => $idGrup]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    
    
}