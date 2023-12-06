<?php

namespace App\Models;

class Imgs
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }



    public function getimgs($id){
        $query = $this->sql->prepare('SELECT * FROM imgs WHERE idUser = :id');
        $query->execute([':id' => $id]);
    
        return $query->fetchAll(\PDO::FETCH_ASSOC);}
}



