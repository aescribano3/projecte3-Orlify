<?php

namespace App\Models;

class Users
{
    private $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function register($username, $nom, $lastname, $pass, $email, $rol)
    {
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


    public function addphoto($ruta, $id)
    {
        $updateStmt = $this->sql->prepare('UPDATE users SET avatar = :ruta WHERE idUser = :user_id');
        $result = $updateStmt->execute([
            ':user_id' => $id,
            ':ruta' => $ruta
        ]);

        // Asegúrate de manejar $result según tus necesidades
        return $result;
    }

    public function getUser($user)
    {
        $query = $this->sql->prepare('SELECT * FROM users WHERE username = :user');
        $query->execute([':user' => $user]);

        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function validateUser($user, $pass)
    {
        $userData = $this->getUser($user);

        if ($userData) {
            $hash = $userData["password"];
            if (password_verify($pass, $hash)) {
                return $userData;
            }
        }

        return false;
    }

    public function updateUser($id, $name, $lastname, $email)
{
    // Verificar si el usuario con el ID proporcionado existe
    
        // Preparar la consulta de actualización
        $query = $this->sql->prepare('UPDATE users SET name = :name, lastname = :lastname, email = :email WHERE idUser = :idUser');

        // Ejecutar la consulta con los parámetros
        $query->execute([
            ':idUser' => $id,
            ':name' => $name,
            ':lastname' => $lastname,
            ':email' => $email
        ]);

        $query = $this->sql->prepare('SELECT * FROM users WHERE idUser = :idUser');
        $query->execute([':idUser' => $id]);

        return $query->fetch(\PDO::FETCH_ASSOC);


}

    public function userExists($user)
{
    $query = $this->sql->prepare('SELECT COUNT(*) FROM users WHERE username = :user');
    $query->execute([':user' => $user]);

    return $query->fetchColumn() > 0;
}
}
