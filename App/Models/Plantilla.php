<?php

namespace App\Models;

class Plantilla
{
    public $sql;

    public function __construct($sql) {
        $this->sql = $sql;
    }

    public function getAllPlantilles(){
        $sql = "SELECT * FROM plantilla";
        $stm = $this->sql->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
}
}