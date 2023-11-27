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
        $insertStmt = $this->sql->prepare('INSERT INTO users (username,name1, lastname, pass, email, rol) VALUES (:username, :name1,  :lastname, :pass, :email, :rol);');
        $result = $insertStmt->execute([
            ':username' => $username,
            ':name1' => $nom,
            ':lastname' => $lastname,
            ':pass' => $pass,
            ':email' => $email,
            ':rol' => $rol,
        ]);
        return "Registro exitoso.";

    }

}