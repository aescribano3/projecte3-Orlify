<?php

namespace App\Controllers;

use App\Container;

class Controlpanel
{

    /**
     * Generates the control panel view.
     *
     * @param   SESSION     $user        The user in session.
     * @param   user        $userLId     The user in session ID.
     * @param   users       $users       All users in the database.
     * @param   grup        $grups       All groups in the database.
     * @param   orla        $orles       All orles in the database.
     * @param   users       $profes      All professors in the database.
     * @param   plantilla   $plantilles  All templates in the database.
     * @param   usersP      $usersP      All students of a teacher.
     * @param   grupsP      $grupsP      All groups of a teacher.
     *
     * @return  array                     The return description.
     */
    public function ctrlIndex ($request, $response, $container){

        $userL = $request->get("SESSION", "user");
        $userLId = $userL["idUser"];

        $UserModel = $container->get("users");
        $users = $UserModel->getAll();
        $usersP = $UserModel->getProfeUser($userLId);

        $GrupModel = $container->get("grup");
        $grups = $GrupModel->getAll();
        $grupsP = $GrupModel->getProfeGrup($userLId);

        $OrlaModel = $container->get("orla");
        $orles = $OrlaModel->getAll();

        $ProfModel = $container->get("users");
        $profes = $ProfModel->getProfes();

        $plantillaMoel = $container->get("plantilla");
        $plantilles = $plantillaMoel->getAllPlantilles();

        $response->set("usersP", $usersP);
        $response->set("grupsP", $grupsP);
        $response->set("profes", $profes);
        $response->set("users", $users);
        $response->set("grups", $grups);
        $response->set("orles", $orles);
        $response->set("plantilles", $plantilles);

        $response->SetTemplate("infodades.php");

        return $response;
    }

    /**
     * Creates a new group.
     *
     * @param   string          $grupname        The name of the group.
     * @param   string          $grupcurs        The course of the group.
     * @param   string          $grupteacher     The teacher of the group.
     * @param   GrupModel       $GrupModel       The model for managing groups.
     * @param   resspuestaajax  $resspuestaajax  The AJAX response object.
     *
     * @return  void
     */
    public function createGrup ($request, $response, $container){

        $grupname = $request->get(INPUT_POST, "grupname");
        $grupcurs = $request->get(INPUT_POST, "grupcurs");
        $grupteacher = $request->get(INPUT_POST, "grupteacher");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->createGrup($grupname, $grupcurs, $grupteacher);

        if ($GrupModel) {
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

    
    /**
     * Modifies a group.
     *
     * @param   string              $grupname           The group name.
     * @param   string              $grupcurs           The group course.
     * @param   string              $grupteacher        The group teacher.
     * @param   GrupModel           $GrupModel          The GrupModel object.
     * @param   int                 $id                 The group ID.
     * @param   resspuestaajax      $resspuestaajax     The AJAX response object.
     *
     * @return  mixed                   The modified group.
     */
    public function modifiGrup ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");
        $grupname = $request->get(INPUT_POST, "grupname");
        $grupcurs = $request->get(INPUT_POST, "grupcurs");
        $grupteacher = $request->get(INPUT_POST, "grupteacher");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->modifiGrup($id, $grupname, $grupcurs, $grupteacher);

        if ($GrupModel) {
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

    /**
     * Drops a group.
     *
     * @param   string              INPUT_POST          The method used to send the data.
     * @param   int                 $id                 The ID of the group.
     * @param   GrupModel           $GrupModel          The GrupModel object.
     * @param   resspuestaajax      $resspuestaajax     The resspuestaajax object.
     *
     * @return  mixed                           The result of dropping the group.
     */
    public function dropGrup ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->dropGrup($id);

        if ($GrupModel) {
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

    /**
     * Creates a new user.
     *
     * @param   string  $username   The username of the user.
     * @param   string  $name       The name of the user.
     * @param   string  $lastname   The last name of the user.
     * @param   string  $email      The email address of the user.
     * @param   string  $password   The password of the user.
     * @param   string  $userrol    The role of the user.
     * @param   string  $copy       The default photo path.
     * @param   string  $rutaFotoPorDefecto  The complete default photo path.
     * @param   string  $ruta       The path of the photo.
     *
     * @return  array   An array containing the details of the newly created user.
     */

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
        $rutaCompleta = $rutaNuevaCarpeta . $register . "/";


        $rutaFotoPorDefecto = "./usersimg/default.png";

        $ruta = $rutaCompleta . "avatar.jpg";
        if (mkdir($rutaCompleta, 0750, true)) {
            if (copy($rutaFotoPorDefecto, $rutaCompleta . "avatar.jpg")) {
                $addphoto = $UserModel->addphoto($ruta, $register);
            }
        }


        if ($register) {
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

    /**
     * Shows the data of the user to modify.
     *
     * @param   int         $id         The ID of the selected user.
     * @param   users       $UserModel  The model for managing users.
     *
     * @return  [type]                  [return description]
     */
    public function ctrlgetuser($request, $response, $container)
    {
        $id = $request->get(INPUT_POST, "id");

        $UserModel = $container->get("users");

        $UserModel = $UserModel->getUserById($id);

        $response->Set("data", $UserModel);

        $response->setJson();

        return $response;
    }

    /**
     * Modifies a user data.
     *
     * @param   string  $username   The new username of the user.
     * @param   string  $name       The new name of the user.
     * @param   string  $lastname   The new last name of the user.
     * @param   string  $email      The new email of the user.
     * @param   string  $userrol    The new user role of the user.
     * @param   string  $grups      The new groups of the user.
     * @param   mixed   $ModedUser  The user object to be modified.
     * @param   mixed   $id         The ID of the user to be modified.
     * @param   mixed   $UserModel  The user model object.
     * @param   mixed   $resspuestaajax  The AJAX response object.
     *
     * @return  mixed               The modified user information.
     */
    public function modifiUser($request, $response, $container)
    {

        $id = $request->get(INPUT_POST, "id");
        $username = $request->get(INPUT_POST, "username");
        $name = $request->get(INPUT_POST, "name");
        $lastname = $request->get(INPUT_POST, "lastname");
        $email = $request->get(INPUT_POST, "email");
        $userrol = $request->get(INPUT_POST, "userrol");
        $grups = $_POST["grups"];

        $UserModel = $container->get("users");

        $ModedUser = $UserModel->modifiUser($id, $username, $name, $lastname, $email, $userrol, $grups);

        if ($UserModel) {
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

    /**
     * Drops a user.
     *
     * @param   mixed           $UserModel       The User model object.
     * @param   mixed           $id              The user ID.
     * @param   mixed           $resspuestaajax  The response object for AJAX requests.
     *
     * @return  mixed                           The result of the operation.
     */
    public function dropUser ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");

        $UserModel = $container->get("users");

        $UserModel = $UserModel->dropUser($id);

        if ($UserModel) {
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

    /**
     * Create an orla.
     *
     * @param   orla            $namePost       The name of the orla
     * @param   orlaname        $grupPost       The group of the orla
     * @param   orlagrup        $orlaPost       The plantilla of the orla
     * @param   orlaplantilla   $orlakey        The key of the orla
     * @param   orlakey         $orlapublic     The public status of the orla
     * @param   resspuestaajax  $resspuestaajax The AJAX response object.
     *
     * @return  mixed                           The result of creating the orla.
     */
    public function ctrlCreateOrla($request, $response, $container) {
        $orlaModel = $container->get("orla");
        
        $namePost = $request->get(INPUT_POST, "orlaname");
        $grupPost = $request->get(INPUT_POST, "orlagrup");
        $orlaPost = $request->get(INPUT_POST, "orlaplantilla");
        $orlakey = $request->get(INPUT_POST, "orlakey");
        $orlapublic = $request->get(INPUT_POST, "orlapublic");

        $createOrla = $orlaModel->createorla($namePost, $grupPost, $orlaPost, $orlakey, $orlapublic);

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

    /**
     * Modifies an orla.
     *
     * @param int    $idOrla          The ID of the orla.
     * @param string $orlaName        The name of the orla.
     * @param int    $orlaGrup        The group of the orla.
     * @param int    $orlaPlantilla   The template of the orla.
     * @param string $orlakey         The key of the orla.
     * @param int    $orlapublic      The public status of the orla.
     * @param modifiOrla $modifiOrla  The modified orla object.
     * @param resspuestaajax $resspuestaajax The AJAX response object.
     *
     * @return void
     */
    public function ctrlmodifiOrla ($request, $response, $container){
        $orlesModel = $container->get("orla"); 

        $idOrla = $request->get(INPUT_POST, "orlaId");
        $orlaName = $request->get(INPUT_POST, "orlaname");
        $orlaGrup = $request->get(INPUT_POST, "orlagrup");
        $orlaPlantilla = $request->get(INPUT_POST, "orlaplantilla");
        $orlakey = $request->get(INPUT_POST, "orlakey");
        $orlapublic = $request->get(INPUT_POST, "orlapublic");


        $modifiOrla = $orlesModel->updateOrla($idOrla, $orlaName, $orlaGrup, $orlaPlantilla, $orlakey, $orlapublic);

        if ($modifiOrla) {
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

    /**
     *
     * Drops an orla.
     *
     * @param   int          $idOrla          The ID of the orla to be deleted.
     * @param   eliminarOrla          $eliminarOrla    An instance of the eliminarOrla class.
     * @param   resspuestaajax  $resspuestaajax  An instance of the resspuestaajax class.
     *
     * @return  [type]                           [return description]
     */
    public function ctrldropOrla($request, $response, $Container){
        $orlaModel = $Container->get("orla");

        $idOrla = $request->get(INPUT_POST, "orlaId");
        $eliminarOrla = $orlaModel->dropOrla($idOrla);

        if ($eliminarOrla) {
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
    // CSV
    public function cntrlIndex($request, $response, $container)
    {
        $variableControl = $request->get(INPUT_POST, "variableControl");


        $nombreDelArchivo = basename($_FILES['csv']['name']);
        $path_info = pathinfo($nombreDelArchivo);
        $extension = $path_info['extension'];

        if ($extension != "csv") {
            $token = false;
            $resspuestaajax = "Error al importar el fitxer";
            $response->set("resspuestaajax", $resspuestaajax);
            $response->set("token", $token);
            $response->redirect("location:/info-dades");
        } else {
            $rutaArchivo = $_FILES['csv']['tmp_name'];
            $fila = 1;
            $resultados = array(); // Array para almacenar los resultados
            if (($gestor = fopen($rutaArchivo, "r")) !== FALSE) {
                while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
                    $numero = count($datos);
                    $fila++;
                    // Verificar que hay suficientes elementos en la fila
                    if ($numero >= 6) {
                        $registro = array(
                            'username' => $datos[0],
                            'name' => $datos[1],
                            'lastname' => $datos[2],
                            'password' => $datos[3],
                            'email' => $datos[4],
                            'avatar' => $datos[5],
                            'rol' => $datos[6]
                        );
                        // Agregar el registro al array de resultados
                        $resultados[] = $registro;
                    } else {
                        echo "Fila incompleta en la línea $fila<br>";
                    }
                }
                fclose($gestor);
                // Mostrar los resultados 

                foreach ($resultados as $registro) {

                    // los imputs de los usuarios
                    $username = $registro['username'];
                    $name = $registro['name'];
                    $lastname = $registro['lastname'];
                    $password = $registro['password'];
                    $email = $registro['email'];
                    $avatar = $registro['avatar'];
                    $rol = $registro['rol'];

                    // hashear password
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT, ["cost" => 12]);

                    // llamer al model de user
                    $UserModel = $container->get("users");
                    $addUserCSV = $UserModel->registerCSV($username, $name, $lastname, $passwordHash, $email, $avatar, $rol);
                }
                if ($addUserCSV) {
                    $token = true;
                    $resspuestaajax = "Usuaris creats correctament";
                    $response->set("resspuestaajax", $resspuestaajax);
                    $response->set("token", $token);
                    // $response->redirect("location:/info-dades");
                } else {
                    $token = false;
                    $resspuestaajax = "Error al crear l'usuari";
                    $response->set("resspuestaajax", $resspuestaajax);
                    $response->set("token", $token);
                    // $response->redirect("location:/info-dades");
                }
            }
            $response->setJSON();
            return $response;
        }
    }
}
