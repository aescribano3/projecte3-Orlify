<?php
namespace App\Controllers;

class user{

    public function checkuser($request, $response, $container){

        $username = $request->get(INPUT_POST, "username");

        $UserModel = $container->get("users");

        $UserModel = $UserModel->userExists($username);

        echo($UserModel);
        die();

    }


    public function ctrlmisdades($request, $response, $container)
    {        
        $response->SetTemplate("misdatos.php");

        return $response;
    }


    public function checkpass($request, $response, $container)
    {

        $r = $request->get("SESSION", "user"); 

        $r = $r["username"];

        $inputpassword = $request->get(INPUT_POST,"confirm-password");
        
        $userModel = $container->get("users");
        $user = $userModel->validateUser($r, $inputpassword);

        if($user){
            $response->set("result","ok" ); 
        }else{
            $response->set("result","error" ); 

        }

        $response->setJson();  
        return $response;
    }

    
    public function Updateuser($request, $response, $container)
    {



        $r = $request->get("SESSION", "user"); 


        $name = $request->get(INPUT_POST, "floating_first_name");
        $lastname = $request->get(INPUT_POST, "floating_last_name");
        $email = $request->get(INPUT_POST, "floating_email");


        $userModel = $container->get("users");
        $id = $r["idUser"];

        $user = $userModel->updateUser($id,$name,$lastname,$email);

        $response->setSession("user", $user);

        $rutaNuevaCarpeta = './usersimg/';
        $rutaCompleta = $rutaNuevaCarpeta.$user["idUser"]."/";
        $capturedImageData = $request->get(INPUT_POST, "capturedImageData");

        // Si hay una imagen capturada, guárdala en el servidor
        if (empty($capturedImageData)) {

            if (!empty($_FILES["imagen"]["tmp_name"][0])) {

                unlink($user["avatar"]);

                foreach ($_FILES["imagen"]["tmp_name"] as $key => $tmp_name) {
                    
                    $extension = pathinfo($_FILES["imagen"]["name"][$key], PATHINFO_EXTENSION);
                
                    $nombreArchivo = "avatar." . $extension;

                    $ruta = $rutaCompleta . $nombreArchivo;
                
                    $rutaTemporal = $_FILES["imagen"]["tmp_name"][$key];
                
                    move_uploaded_file($rutaTemporal, $ruta);

                    $userPhoto = $userModel->addphoto($ruta, $id);

                    $r["avatar"] = $ruta;
                    
                    $response->setSession("user", $r);
                }
            }
            
        } else {

            unlink($user["avatar"]);

            $capturedImageStr = substr($capturedImageData, strpos($capturedImageData, ",") + 1);

            $capturedImage = base64_decode($capturedImageStr);

            $extension = "png";

            $nombreArchivo = "avatar." . $extension;

            $ruta = $rutaCompleta . $nombreArchivo;

            file_put_contents($ruta, $capturedImage);

            $userPhoto = $userModel->addphoto($ruta, $id);

            $r["avatar"] = $ruta;

            $response->setSession("user", $r);
        }

        return $response;
    }
    
}