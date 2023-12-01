<?php

namespace App\Controllers;

class SingUp{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("register.php");

        return $response;
    }

    public function Register($request, $response, $container)
    {

        $putrol = $request->get("SESSION", "rol");
        $username = $request->get(INPUT_POST, "username");
        $nom = $request->get(INPUT_POST, "name");
        $lastname = $request->get(INPUT_POST, "lastname");
        $pass = $request->get(INPUT_POST, "password");

        $pass = password_hash($pass, PASSWORD_DEFAULT, ["cost" => 12]);

        $email = $request->get(INPUT_POST, "email");


        if($putrol){
            $roluser = $request->get(INPUT_POST, "rol");  
        }else{
            $roluser = "alumne";
        }

        $model = $container->get("users");

        
        
        $register = $model->register($username,$nom,$lastname,$pass,$email,$roluser);

        //register have the value of iduser

        $rutaNuevaCarpeta = './usersimg/';
        $rutaCompleta = $rutaNuevaCarpeta.$register."/";
        
        
           

        if (mkdir($rutaCompleta, 0750, true)) {
            if (!empty($_FILES["images"]["tmp_name"][0])) {


            foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
                // Obtener la extensión del archivo original
                $extension = pathinfo($_FILES["images"]["name"][$key], PATHINFO_EXTENSION);
            
                // Construir el nombre del archivo de destino como "avatar" + extensión original
                $nombreArchivo = "avatar." . $extension;
            
                // Ruta completa del archivo de destino
                $ruta = $rutaCompleta . $nombreArchivo;
            
                // Ruta temporal del archivo subido
                $rutaTemporal = $_FILES["images"]["tmp_name"][$key];
            
                // Mover el archivo a la ubicación de destino
                move_uploaded_file($rutaTemporal, $ruta);
            }
        }else {
            // Si no se ha subido ninguna foto, agregar lógica para asignar una foto por defecto
            $rutaFotoPorDefecto = "./usersimg/default.png"; // Reemplaza esto con la ruta de tu foto por defecto
        
            // Copiar la foto por defecto al directorio
            $ruta = $rutaCompleta . "avatar.jpg";
            if (copy($rutaFotoPorDefecto, $rutaCompleta . "avatar.jpg")) {
            }
         }
        }


        $addphoto = $model->addphoto($ruta,$register);

        return $response;
    }
}
