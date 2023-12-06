<?php
namespace App\Controllers;

class Controlpanel{

    public function ctrlIndex ($request, $response, $container){

        $UserModel = $container->get("users");
        $users = $UserModel->getAll();

        $GrupModel = $container->get("grup");
        $grups = $GrupModel->getAll();

        $OrlaModel = $container->get("orla");
        $orles = $OrlaModel->getAll();

        $ProfModel = $container->get("users");
        $profes = $ProfModel->getProfes();

        $response->set("profes", $profes);
        $response->set("users", $users);
        $response->set("grups", $grups);
        $response->set("orles", $orles);

        $response->SetTemplate("infodades.php");

        return $response;
    }

    public function createGrup ($request, $response, $container){

        $grupname = $request->get(INPUT_POST, "grupname");
        $grupcurs = $request->get(INPUT_POST, "grupcurs");
        $grupteacher = $request->get(INPUT_POST, "grupteacher");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->createGrup($grupname, $grupcurs, $grupteacher);

        if($GrupModel){
            $response->setSession("ajax-message","Grup creat correctament");
        } else {
            $response->setSession("ajax-message","Error al crear el grup");
        }

        return $response;
    }

    public function modifiGrup ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");
        $grupname = $request->get(INPUT_POST, "grupname");
        $grupcurs = $request->get(INPUT_POST, "grupcurs");
        $grupteacher = $request->get(INPUT_POST, "grupteacher");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->modifiGrup($id, $grupname, $grupcurs, $grupteacher);

        if($GrupModel){
            $response->setSession("ajax-message","Grup modificat correctament");
        } else {
            $response->setSession("ajax-message","Error al modificar el grup");
        }

        return $response;
    }

    public function dropGrup ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->dropGrup($id);

        if($GrupModel){
            $response->setSession("ajax-message","Grup eliminat correctament");
        } else {
            $response->setSession("ajax-message","Error al eliminar el grup");
        }

        return $response;
    }

    public function createUser ($request, $response, $container){

        $username = $request->get(INPUT_POST, "username");
        $name = $request->get(INPUT_POST, "name");
        $lastname = $request->get(INPUT_POST, "lastname");
        $email = $request->get(INPUT_POST, "email");
        $password = $request->get(INPUT_POST, "password");
        $password = password_hash($password, PASSWORD_DEFAULT, ["cost" => 12]);
        $userrol = $request->get(INPUT_POST, "userrol");

        $UserModel = $container->get("users");

        $register = $UserModel->register($username, $name, $lastname, $password, $email, $userrol);

        $rutaNuevaCarpeta = './usersimg/';
        $rutaCompleta = $rutaNuevaCarpeta.$register."/";


        $rutaFotoPorDefecto = "./usersimg/default.png"; // Reemplaza esto con la ruta de tu foto por defecto
        
            // Copiar la foto por defecto al directorio
            $ruta = $rutaCompleta . "avatar.jpg";
            if (mkdir($rutaCompleta, 0750, true)) {
            if (copy($rutaFotoPorDefecto, $rutaCompleta . "avatar.jpg")) {
                $addphoto = $UserModel->addphoto($ruta,$register);

            }
        }


        if($register){
            $response->setSession("ajax-message","Usuari creat correctament");
        } else {
            $response->setSession("ajax-message","Error al crear l'usuari");
        }

        return $response;
    }

    public function ctrlgetuser($request, $response, $container)
    {        
        $id = $request->get(INPUT_POST, "id");

        $UserModel = $container->get("users");

        $UserModel = $UserModel->getUserById($id);


        
        $response->Set("data",$UserModel);

        $response->setJson(); 

        return $response;
    }

    public function modifiUser ($request, $response, $container){
            
            $id = $request->get(INPUT_POST, "id");
            $username = $request->get(INPUT_POST, "username");
            $name = $request->get(INPUT_POST, "name");
            $lastname = $request->get(INPUT_POST, "lastname");
            $email = $request->get(INPUT_POST, "email");
            $userrol = $request->get(INPUT_POST, "userrol");
            $grups = $_POST["grups"];
    
            $UserModel = $container->get("users");
    
            $ModedUser = $UserModel->modifiUser($id, $username, $name, $lastname, $email, $userrol, $grups);
    
            if($UserModel){
                $response->setSession("ajax-message","Usuari modificat correctament");
            } else {
                $response->setSession("ajax-message","Error al modificar l'usuari");
            }
    
            return $response;
        
    }

    public function dropUser ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");

        $UserModel = $container->get("users");

        $UserModel = $UserModel->dropUser($id);

        if($UserModel){
            $response->setSession("ajax-message","Usuari eliminat correctament");
        } else {
            $response->setSession("ajax-message","Error al eliminar l'usuari");
        }

        return $response;
    }
}