<?php

namespace App\Controllers;

class CreateOrla{


    public function ctrlCreateOrla($request, $response, $container) {

        $orlaModel = $container->get("orla"); // obtenim el model de la orla
        

        $name = $request->get(INPUT_POST, "orlaname");
        $grup = $request->get(INPUT_POST, "grupselected");
        $orla = $request->get(INPUT_POST, "selectedorla");


        if ($name && $grup && $orla) {
            $orlaModel->addOrla($name, $grup, $orla);
            $response->redirect("location: /info-dades");

        }

        return $response;
    }
}
