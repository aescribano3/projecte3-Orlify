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


        public function getimgsperorla($id,$orla){
            $query = $this->sql->prepare('SELECT * FROM imgs WHERE idUser = :id AND idOrla =:orla');
            $query->execute([':id' => $id,
                             ':orla'=>$orla]);
        
            return $query->fetchAll(\PDO::FETCH_ASSOC);}


            public function afegirimatge($url,$id,$orla){
                $stm = $this->sql->prepare('INSERT INTO imgs (url,idUser,idOrla) 
                VALUES (:url, :user, :orla)');
                $stm->execute([
                    'url' => $url, 
                    'user' => $id, 
                    'orla' => $orla,
                ]);
}


public function selecionarimatge($id)
{
    $updateStmt = $this->sql->prepare('UPDATE imgs SET Selecionada = 1 WHERE idImg = :id');
    $result = $updateStmt->execute([
        ':id' => $id
    ]);

    // Asegúrate de manejar $result según tus necesidades
    return $result;
}


public function desselecionarimatge($orla,$usuari)
{
    $updateStmt = $this->sql->prepare('UPDATE imgs SET Selecionada = 0 WHERE idOrla = :orla AND idUser = :usuari');
    $result = $updateStmt->execute([
        ':orla' => $orla,
        ':usuari' => $usuari
    ]);

    // Asegúrate de manejar $result según tus necesidades
    return $result;
}

}


