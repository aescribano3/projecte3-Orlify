<?php

namespace App\Models;

class GrupUser
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    /**
     * Retrieves the group ID associated with a user.
     *
     * @param int $idUser The ID of the user.
     * @return array|null The group ID or null if not found.
     */
    public function getidGrup($idUser) {
        $stm = $this->sql->prepare("SELECT idGrup FROM grupuser WHERE idUser=:idUser;");
        $stm->execute([':idUser' => $idUser]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    
    /**
     * Gets the name of the group to which a user belongs based on their user ID and group ID.
     *
     * @param int $idUser The user ID.
     * @param int $idGrup The group ID.
     * @return array|null The group data (group ID, user ID, group name, course) or null if no group is found.
     */
    public function getNameGrup($idUser, $idGrup) {
        $stm = $this->sql->prepare("SELECT g.idGrup, g.idUser, gp.name, gp.curs FROM grupuser g JOIN grup gp ON gp.idGrup = g.idGrup WHERE g.idUser = :idUser AND g.idGrup = :idGrup ORDER BY gp.curs DESC LIMIT 1;");
        $stm->execute([':idUser' => $idUser, ':idGrup' => $idGrup]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    
    
}