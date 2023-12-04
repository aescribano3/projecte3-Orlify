<?php

namespace App\Controllers;

class CreateOrla
{


    public function ctrlCreateOrla($request, $response, $container)
    {

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
}
