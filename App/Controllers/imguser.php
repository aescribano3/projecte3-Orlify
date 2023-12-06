<?php

namespace App\Controllers;

class Imguser{

    public function ctrlorla($request, $response, $container)
    {

        $response->SetTemplate("verimagenorla.php");

        return $response;
    }


    public function ctrlimatgeuser($request, $response, $container)
    {

        $user= $request->get("SESSION", "user"); 
                      
        $r = $request->get(INPUT_GET, "r");

       
        if(empty($r)) {
            $r = $user["idUser"];
        }  
        
       $id =intval($r);

       $response->setSession("idusuari",$id);
       

       $imgModel = $container->get("imgs");

       $img = $imgModel->getimgs($id);

       $response->set("imgs",$img);


       $OrlaModel = $container->get("orla");

       $orla = $OrlaModel->getorla($id);

       $response->set("orlas",$orla);

        
        $response->SetTemplate("imgiorla.php");



        return $response;
    }

    public function afegirimatge($request, $response, $container)
    {

        $id= $request->get("SESSION", "idusuari"); 

        $rutaNuevaCarpeta = './usersimg/';
        $rutaCompleta = $rutaNuevaCarpeta.$id.'/'."orla/";
        echo($rutaCompleta);

        
            // Verifica si la carpeta ya existe
            if (!file_exists($rutaCompleta)) {
                // Intenta crear la carpeta
                if (mkdir($rutaCompleta, 0755, true)) {
                    echo "La carpeta se ha creado correctamente en la ruta: $ruta";
                } else {
                    echo "Error al intentar crear la carpeta en la ruta: $ruta";
                }
            } else {

                        $archivos = scandir($rutaCompleta);

                        // Elimina las referencias a la carpeta actual y a la carpeta padre
                        $archivos = array_diff($archivos, array('.', '..'));

                        // Número de archivos en la carpeta
                        $nom = count($archivos);

                        // Muestra la cantidad de archivos
                        echo "Número de archivos en la carpeta: $nom";

                        foreach ($_FILES["imagen"]["tmp_name"] as $key => $tmp_name) {
                            // Obtener la extensión del archivo original
                            $extension = pathinfo($_FILES["imagen"]["name"][$key], PATHINFO_EXTENSION);
                        
                            // Construir el nombre del archivo de destino como "avatar" + extensión original
                            $nombreArchivo = $nom .'.' . $extension;
                        
                            // Ruta completa del archivo de destino
                            $ruta = $rutaCompleta . $nombreArchivo;
                        
                            // Ruta temporal del archivo subido
                            $rutaTemporal = $_FILES["imagen"]["tmp_name"][$key];
                        
                            // Mover el archivo a la ubicación de destino
                            move_uploaded_file($rutaTemporal, $ruta);
                        }

                
            }
            
        

        die();
        $response->setSession("idusuari","");
        
        $response->SetTemplate("imgiorla.php");


        return $response;
    }


    
}
