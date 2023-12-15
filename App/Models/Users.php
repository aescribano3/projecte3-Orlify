<?php

namespace App\Models;

class Users
{
    private $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function getAll(){
        $users = array();
        $query = "SELECT * FROM users;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $user) {
            $users[] = $user;
        }

        return $users;
    }

    /**
 * [register function that registers the user who has logged into the page]
 *
 * @param   [String]  $username  [$username username]
 * @param   [String]  $nom       [$nom first name]
 * @param   [String]  $lastname  [$lastname last name]
 * @param   [String]  $pass      [$pass password]
 * @param   [String]  $email     [$email email]
 * @param   [String]  $rol       [$rol role]
 *
 * @return  []                 [return the function returns the id of the registered user]
 */

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
        return $this->sql->lastInsertId();;
    }

   /**
 * [addPhoto adds the image to the database]
 *
 * @param   [String]  $ruta  [$ruta path of the uploaded image]
 * @param   [Int]  $id    [$id id]
 *
 * @return  []             [return does not return anything]
 */

    public function addphoto($ruta, $id)
    {
        $updateStmt = $this->sql->prepare('UPDATE users SET avatar = :ruta WHERE idUser = :user_id');
        $result = $updateStmt->execute([
            ':user_id' => $id,
            ':ruta' => $ruta
        ]);

        return $result;
    }

/**
 * [getUser searches for the user by username]
 *
 * @param   [String]  $user  [$ruta username]
 *
 * @return  []             [return returns the selected user]
 */

    public function getUser($user)
    {
        $query = $this->sql->prepare('SELECT * FROM users WHERE username = :user');
        $query->execute([':user' => $user]);

        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    /**
 * [validateUser validates if the username and password are correct]
 *
 * @param   [String]           $user      [$user username]
 * @param   [String]           $pass      [$pass password]
 *
 * @return  []                          [return returns the user if it matches, otherwise returns false]
 */

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

 /**
 * [updateUser updates the user's data]
 *
 * @param   [String]           $id      [$id id]
 * @param   [String]           $name      [$name first name]
 * @param   [String]           $lastname      [$lastname last name]
 * @param   [String]           $mail      [$mail email]
 *
 * @return  []                          [Returns the updated user]
 */

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

/**
 * [userExists checks if a username exists]
 *
 * @param   [String]  $user  [$user username]
 *
 * @return  []             [return returns the number of users]
 */

    public function userExists($user)
    {
        $query = $this->sql->prepare('SELECT COUNT(*) FROM users WHERE username = :user');
        $query->execute([':user' => $user]);

        return $query->fetchColumn() > 0;
    }

/**
 * [dropUser deletes the user and the user's group]
 *
 * @param   [int]  $id  [$id user id]
 *
 * @return  [][]         [return]
 */

    public function dropUser($id){
            
        $stm = $this->sql->prepare("DELETE FROM grupuser WHERE idUser=:id;");

        $stm -> execute([
            ':id' => $id
        ]);

        $stm = $this->sql->prepare("DELETE FROM users WHERE idUser=:id;");
        
        $stm -> execute([
            ':id' => $id
        ]);
        
        return $stm;
        
    }

/**
 * [getProfes selects all the professors]
 *
 * @return  [][]         [return returns all the professors]
 */

    public function getProfes(){
        $profes = array();
        $query = "SELECT * FROM users WHERE rol = 'professor';";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $profe) {
            $profes[] = $profe;
        }

        return $profes;
    }

/**
 * [getUserById selects the user by id]
 *
 * @param   [int]  $id  [$id user id]
 * @return  [][]         [return returns the user containing the id]
 */


    public function getUserById($id){
        $query = $this->sql->prepare('SELECT * FROM users WHERE idUser = :id');
        $query->execute([':id' => $id]);

        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * [modifiUser modifica un usuario desde el panel de control]
     *
     * @param   [Int]  $id        [$id id user]
     * @param   [String]  $username  [$username username]
     * @param   [String]  $name      [$name name]
     * @param   [String]  $lastname  [$lastname lastname]
     * @param   [String]  $email     [$email email]
     * @param   [String]  $rol       [$rol rol]
     * @param   [Array]  $grups     [$grups groups]
     * @param   as      $grup      [$grup conte la informacio de un grup en concret]
     *
     * @return  [][][]             [return description]
     */
    public function modifiUser($id, $username, $name, $lastname, $email, $rol, $grups){
            
            $stm = $this->sql->prepare("UPDATE users SET username=:username, name=:name, lastname=:lastname, email=:email, rol=:rol WHERE idUser=:id;");
            
            $stm -> execute([
                ':id' => $id,
                ':username' => $username, 
                ':name' => $name, 
                ':lastname' => $lastname,
                ':email' => $email,
                ':rol' => $rol
            ]);

            $stm = $this->sql->prepare("DELETE FROM grupuser WHERE idUser=:id;");
            
            $stm -> execute([
                ':id' => $id
            ]);
            
            foreach($grups as $grup){
                $stm = $this->sql->prepare("INSERT INTO grupuser (idUser, idGrup) VALUES (:id, :grup);");
                
                $stm -> execute([
                    ':id' => $id,
                    ':grup' => $grup
                ]);
            }
            
            return $stm;
            
    }

/**
 * [updateUserSettoken adds a token to the user that matches the email]
 *
 * @param   [String]  $email                 [$email email]
 * @param   [String]  $reset_token_hash      [$reset_token_hash contains the generated token]
 * @param   [String]  $reset_token_expires_at [$reset_token_expires_at contains the expiration date of the token]
 *
 * @return  [][][]                           [return returns true]
 */

    public function updateUserSettoken($email, $reset_token_hash, $reset_token_expires_at){
        $query = $this->sql->prepare('UPDATE users
            SET 
            reset_token_hash = :reset_token_hash, 
            reset_token_expires_at = :reset_token_expires_at
            WHERE email = :email');
        $query->execute([
            ':email' => $email,
            ':reset_token_hash' => $reset_token_hash,
            ':reset_token_expires_at' => $reset_token_expires_at
        ]);
        return true;
    }

/**
 * [getHashToEqualToken adds a token to the user that matches the email]
 *
 * @param   [String]  $token     [$token token to search for]
 *
 * @return  [][][]             [return returns the selected row]
 */

    public function getHashToEqualToken($token){
        $query = $this->sql->prepare('SELECT * FROM users WHERE reset_token_hash = :reset_token_hash');
        $query->execute([
            ':reset_token_hash' => $token
        ]);
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

/**
 * [updatePassword updates the password based on the token]
 *
 * @param   [String]  $reset_token_hash  [$reset_token_hash]
 * @param   [String]  $password           [$password]
 *
 * @return  [][][]                      [return returns true]
 */


    public function updatePassword($reset_token_hash, $password){
        $query = $this->sql->prepare('UPDATE users
            SET 
            password = :password
            WHERE reset_token_hash = :reset_token_hash');
        $query->execute([
            ':reset_token_hash' => $reset_token_hash,
            ':password' => $password
        ]);
        return true;
    }

    public function getProfeUser($id){
        $query = $this->sql->prepare('SELECT u.* FROM users u
            INNER JOIN grupuser gu ON u.idUser = gu.idUser
            INNER JOIN grup g ON gu.idGrup = g.idGrup
            WHERE g.idTeacher = :id');
        $query->execute([':id' => $id]);

        return $query->fetchAll(\PDO::FETCH_ASSOC);
    } 
    
}
