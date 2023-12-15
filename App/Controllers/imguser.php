<?php

namespace App\Controllers;

class Imguser{

    public function ctrlorla($request, $response, $container)
    {

        $response->SetTemplate("verimagenorla.php");

        return $response;
    }


    public function deleteimg($request, $response, $container)
    {

        $orla= $request->get("SESSION", "idorla"); 
        $idusuari= $request->get("SESSION", "idusuari");

        $idimg = $request->get(INPUT_GET, "r");

        $imgModel = $container->get("imgs");

        $img = $imgModel->getimg($idimg);
        
        unlink($img["url"]);

        $img = $imgModel->deleteimg($idimg);

        $response->redirect("location:/imatges-usuari?r=$idusuari"); 

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


       

       $orla = $OrlaModel->getuserorlas($id);

       $response->set("orlas",$orla);

        
        $response->SetTemplate("imgiorla.php");



        return $response;
    }

    
    public function ctrlorlaimg($request, $response, $container)
    {
        $orla = $request->get(INPUT_GET, "r");

        $response->setSession("idorla",$orla);

        
        $id =intval($orla);


        $id= $request->get("SESSION", "idusuari"); 


        $imgModel = $container->get("imgs");

        $img = $imgModel->getimgsperorla($id,$orla);

        
        $response->set("imgs",$img);


        $OrlaModel = $container->get("orla");

        $orla = $OrlaModel->getuserorlas($id);


        $response->set("orlas",$orla);

        $response->SetTemplate("imgiorla.php");
        return $response;
    }
    

    public function selectimg($request, $response, $container)
    {

        $orla= $request->get("SESSION", "idorla"); 
        $idusuari= $request->get("SESSION", "idusuari");

        $img = $request->get(INPUT_GET, "r");

       
        $imgModel = $container->get("imgs");
        $noimg = $imgModel->desselecionarimatge($orla,$idusuari);


        $img = $imgModel->selecionarimatge($img);




        $response->redirect("location:/imatges-usuari?r=$idusuari");

        return $response;
    }


    public function informimg($request, $response, $container)
    {

        $orla= $request->get("SESSION", "idorla"); 
        $idusuari= $request->get("SESSION", "idusuari");

        $img = $request->get(INPUT_GET, "r");

       
        $imgModel = $container->get("imgs");


        $img = $imgModel->informimg($img);


        $response->redirect("location:/imatges-usuari?r=$idusuari");

        return $response;
    }

        

    public function afegirimatge($request, $response, $container)
    {

        $orla= $request->get("SESSION", "idorla"); 


        $id= $request->get("SESSION", "idusuari");

        $rutaNuevaCarpeta = './usersimg/';
        $rutaCompleta = $rutaNuevaCarpeta.$id.'/'."orla/";

        
            // Verifica si la carpeta ya existe
            if (!file_exists($rutaCompleta)) {
                // Intenta crear la carpeta
                mkdir($rutaCompleta, 0755, true);
            };
            

                        $archivos = scandir($rutaCompleta);

                        // Elimina las referencias a la carpeta actual y a la carpeta padre
                        $archivos = array_diff($archivos, array('.', '..'));

                        // Número de archivos en la carpeta
                        $nom = count($archivos);

                        // Muestra la cantidad de archivos

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

                
           
            $imgModel = $container->get("imgs");

            $img = $imgModel->afegirimatge($ruta,$id,$orla);


            $response->set("response",$ruta ); 


        $response->setJson();  
        
            

        return $response;
    }


    
}
