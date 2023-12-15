<?php

namespace App\Models;

class Grup
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }


/**
 * [getAll get all grups]
 *
 *
 * @return  []               [return return all grups]
 */

    public function getAll(){
        $grups = array();
        $query = "SELECT * FROM grup;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $grup) {
            $grups[] = $grup;
        }

        return $grups;
    }

/**
 * [getGrupData get all grups]
 *
 * @param   [Int]  $id  [$id grup id to search for]
 * @return  []               [return return all grups]
 */

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

    
    
    /**
     * [createGrup description]
     *
     * @param   [String]  $grupname  [$grupname nom del grup]
     * @param   [String]  $grupcurs     [$grupcurs curs del grup]
     * @param   [Int]  $grupteacher  [$grupteacher profesor]
     *
     * @return  []                    [return description]
     */

    public function createGrup($grupname, $grupcurs, $grupteacher){
        
        $stm = $this->sql->prepare("INSERT INTO grup (name, curs, idTeacher) VALUES (:grupname, :grupcurs, :grupteacher);");
        
        $stm -> execute([
            ':grupname' => $grupname, 
            ':grupcurs' => $grupcurs, 
            ':grupteacher' => $grupteacher
        ]);
        
        return $stm;
        
    }

    /**
     * [modifiGrup actualitza la informacio de un grup]
     *
     * @param   [Int]  $id           [$id description]
     * @param   [String]  $grupname     [$grupname description]
     * @param   [String]  $grupcurs     [$grupcurs any del curs]
     * @param   [Int]  $grupteacher  [$grupteacher id del profesor]
     *
     * @return  []                    [return description]
     */
    
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

    /**
     * [dropGrup description]
     *
     * @param   [Int]  $id  [$id id del grup que es vol borrar]
     *
     * @return  []           [return description]
     */
    public function dropGrup($id){
        
        $stm = $this->sql->prepare("DELETE FROM grup WHERE idGrup=:id;");
        
        $stm -> execute([
            ':id' => $id
        ]);
        
        return $stm;
        
    }

    public function getProfeGrup($id){
        $stm = $this->sql->prepare("SELECT * FROM grup WHERE idTeacher=:id;");
        $stm->execute([':id' => $id]);
        $results = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

}