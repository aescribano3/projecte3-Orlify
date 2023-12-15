<?php

namespace App\Models;

class Imgs
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

/**
 * [getimgs gets images by user id]
 *
 * @param   [Int]  $id  [$id user id to search for]
 *
 * @return  []               [return returns the images of a user]
 */


    public function getimgs($id){
        $query = $this->sql->prepare('SELECT * FROM imgs WHERE idUser = :id');
        $query->execute([':id' => $id]);
    
        return $query->fetchAll(\PDO::FETCH_ASSOC);}

/**
 * [getimgsperorla gets images by user id]
 *
 * @param   [Int]  $id  [$id user id to search for]
 * @param   [Int]  $orla  [$orla orla id to search for]
 *
 * @return  []               [return returns the images of a user]
 */

        public function getimgsperorla($id,$orla){
            $query = $this->sql->prepare('SELECT * FROM imgs WHERE idUser = :id AND idOrla =:orla');
            $query->execute([':id' => $id,
                             ':orla'=>$orla]);
        
            return $query->fetchAll(\PDO::FETCH_ASSOC);}

/**
 * [getImg gets images by id]
 *
 * @param   [Int]  $id  [$id img id to search for]
 *
 * @return  []               [return returns the images]
 */

            public function getImg($id) {
                $query = $this->sql->prepare('SELECT * FROM imgs WHERE idImg = :id');
                $query->execute([':id' => $id]);
            
                return $query->fetch(\PDO::FETCH_ASSOC);
            }

/**
 * [deleteImg delete images by id]
 *
 * @param   [Int]  $id  [$id img id to search for]
 *
 * @return  []               [return ]
 */
            
            public function deleteImg($id) {
                $query = $this->sql->prepare('DELETE FROM imgs WHERE idImg = :id');
                $query->execute([':id' => $id]);
            
            
                return $query->rowCount();
            }

/**
 * [afegirimatge adds an image]
 *
 * @param   [String]  $url  [$id url source]
 * @param   [Int]  $id  [$id user]
 * @param   [Int]  $orla  [$id orla]
 *
 * @return  []               [return ]
 */



            public function afegirimatge($url,$id,$orla){
                $stm = $this->sql->prepare('INSERT INTO imgs (url,idUser,idOrla) 
                VALUES (:url, :user, :orla)');
                $stm->execute([
                    'url' => $url, 
                    'user' => $id, 
                    'orla' => $orla,
                ]);
}


/**
 * [selecionarimatge selects the image on the server]
 *
 * @param   [Int]  $id  [$id image to select]
 *
 * @return  []           [return description]
 */

public function selecionarimatge($id)
{
    $updateStmt = $this->sql->prepare('UPDATE imgs SET Selecionada = 1 WHERE idImg = :id');
    $result = $updateStmt->execute([
        ':id' => $id
    ]);

    return $result;
}


public function informimg($id)
{
    $updateStmt = $this->sql->prepare('UPDATE imgs SET Informada = 1 WHERE idImg = :id');
    $result = $updateStmt->execute([
        ':id' => $id
    ]);

    return $result;
}



/**
 * [desselecionarimatge removes the selection from the rest of the images]
 *
 * @param   [type]  $orla    [$orla orla id]
 * @param   [type]  $usuari  [$usuari user id]
 *
 * @return  []               [return description]
 */

public function desselecionarimatge($orla,$usuari)
{
    $updateStmt = $this->sql->prepare('UPDATE imgs SET Selecionada = 0 WHERE idOrla = :orla AND idUser = :usuari');
    $result = $updateStmt->execute([
        ':orla' => $orla,
        ':usuari' => $usuari
    ]);

    return $result;
}

}


