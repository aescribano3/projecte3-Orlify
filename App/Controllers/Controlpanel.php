<?php
namespace App\Controllers;

use App\Container;

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

        $plantillaMoel = $container->get("plantilla");
        $plantilles = $plantillaMoel->getAllPlantilles();

        $response->set("profes", $profes);
        $response->set("users", $users);
        $response->set("grups", $grups);
        $response->set("orles", $orles);
        $response->set("plantilles", $plantilles);

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
            $token = true;
            $resspuestaajax = "Grup creat correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        } else {
            $token = false;
            $resspuestaajax = "Error al crear el grup";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        }
        $response->setJSON();

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
            $token = true;
            $resspuestaajax = "Grup modificat correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        } else {
            $token = false;
            $resspuestaajax = "Error al modificar el grup";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        }
        $response->setJSON();

        return $response;
    }

    public function dropGrup ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->dropGrup($id);

        if($GrupModel){
            $token = true;
            $resspuestaajax = "Grup Eliminat correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        } else {
            $token = false;
            $resspuestaajax = "Error al eliminar el grup";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        }
        $response->setJSON();

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
            $token = true;
            $resspuestaajax = "Usuari creat correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
            
        } else {
            $token = false;
            $resspuestaajax = "Error al crear l'usuari";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        }
        $response->setJSON();

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
                $token = true;
                $resspuestaajax = "Usuari modificat correctament";
                $response->set("resspuestaajax", $resspuestaajax);
                $response->set("token", $token);
            } else {
                $token = false;
                $resspuestaajax = "Error al modificar l'usuari";
                $response->set("resspuestaajax", $resspuestaajax);
                $response->set("token", $token);
            }

            $response->setJSON();
    
            return $response;
        
    }

    public function dropUser ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");

        $UserModel = $container->get("users");

        $UserModel = $UserModel->dropUser($id);

        if($UserModel){
            $token = true;
            $resspuestaajax = "Usuari eliminat correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        } else {
            $token = false;
            $resspuestaajax = "Error al eliminar l'usuari";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        }
        $response->setJSON();

        return $response;
    }

    // orles
    public function ctrlCreateOrla($request, $response, $container) {
        $orlaModel = $container->get("orla"); // obtenim el model de la orla
        
        $namePost = $request->get(INPUT_POST, "orlaname");
        $grupPost = $request->get(INPUT_POST, "orlagrup");
        $orlaPost = $request->get(INPUT_POST, "orlaplantilla");

        $createOrla = $orlaModel->createorla($namePost, $grupPost, $orlaPost);

        if ($createOrla) {
            $token = true;
            $resspuestaajax = "Orla creada correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        } else {
                $token = false;
                $resspuestaajax = "Error al crear la orla";
                $response->set("resspuestaajax", $resspuestaajax);
                $response->set("token", $token);
        }
        
        $response->setJSON();

        return $response;
    }

    public function ctrlmodifiOrla ($request, $response, $container){
        $orlesModel = $container->get("orla"); 

        $idOrla = $request->get(INPUT_POST, "orlaId");
        $orlaName = $request->get(INPUT_POST, "orlaname");
        $orlaGrup = $request->get(INPUT_POST, "orlagrup");
        $orlaPlantilla = $request->get(INPUT_POST, "orlaplantilla");


        $modifiOrla = $orlesModel->updateOrla($idOrla, $orlaName, $orlaGrup, $orlaPlantilla);

        if($modifiOrla){
            $token = true;
            $resspuestaajax = "Orla modificada correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        } else {
            $token = false;
            $resspuestaajax = "Error al modificar la orla";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        }
        $response->setJSON();
        return $response;
    }
    public function ctrldropOrla($request, $response, $Container){
        $orlaModel = $Container->get("orla");

        $idOrla = $request->get(INPUT_POST, "orlaId");
        $eliminarOrla = $orlaModel->dropOrla($idOrla); 

        if($eliminarOrla){
            $token = true;
            $resspuestaajax = "Orla eliminada correctament";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        } else {
            $token = false;
            $resspuestaajax = "Error al eliminar la orla";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
        }

        $response->setJSON();
        return $response;

    }
}