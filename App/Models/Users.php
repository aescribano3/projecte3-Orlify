<?php

namespace App\Models;

class Users
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function login($user, $pass){
        $stm = $this->sql->prepare('SELECT username, password FROM users WHERE username = :user');
        $stm->execute(['user' => $user]); 
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["password"] == $pass){
            return $result;
        } else {
            return false;
        }
    }
}