<?php

namespace App\Models;

class Orla
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function addOrla($name, $grup, $orla) {
        $stm = $this->sql->prepare('INSERT INTO orla (name, idGrup, idPlantilla) 
        VALUES (:name, :grup, :orla)');
        $stm->execute([
            'name' => $name, 
            'grup' => $grup, 
            'orla' => $orla,
        ]);
    }
}