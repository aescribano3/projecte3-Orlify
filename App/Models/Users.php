<?php

namespace App\Models;

class Users
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function register($username,$nom,$lastname,$pass,$email,$rol){
        $insertStmt = $this->sql->prepare('INSERT INTO users (username,name, lastname, password, email, rol) VALUES (:username, :name1,  :lastname, :pass, :email, :rol);');
        $result = $insertStmt->execute([
            ':username' => $username,
            ':name1' => $nom,
            ':lastname' => $lastname,
            ':pass' => $pass,
            ':email' => $email,
            ':rol' => $rol,
        ]);
        return $lastInsertId = $this->sql->lastInsertId();;

    }


    public function addphoto($ruta, $id) {
        $updateStmt = $this->sql->prepare('UPDATE users SET avatar = :ruta WHERE idUser = :user_id');
        $result = $updateStmt->execute([
            ':user_id' => $id,
            ':ruta' => $ruta
        ]);
    
        // Asegúrate de manejar $result según tus necesidades
        return $result;
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