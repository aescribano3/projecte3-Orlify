<?php

namespace App\Controllers;

class viewOrla{ //siempre poner ctrlIndex para mantener la pagina


    public function ctrlIndex($request, $response, $container)
    {
        $access = false;
        $access = $request->get("SESSION","access");

        $orlaModel = $container->get("orla");
        $idOrla = $_GET['idOrla'];

        $response->setSession("idOrla", $idOrla);

        $orla = $orlaModel->getOrlaById($idOrla);

        if($orla["public"] == 0) {

            $response->redirect("location: /error");

        }

        $orla = $orlaModel->getViewOrla($idOrla);
        $response->set("orla", $orla);

        $usersOrla = $orlaModel->getUserOrla($idOrla);

        $response->set("access", $access);
        $response->set("usersOrla", $usersOrla);

        $response->SetTemplate("orla.php");

        $response->setSession("access", false);
        return $response;
    }

    public function CheckKey($request, $response, $container)
    {

        $orlaModel = $container->get("orla");
        $idOrla = $request->get("SESSION", "idOrla");

        $orla = $orlaModel->getOrlaById($idOrla);

        $keyUser = $request->get(INPUT_POST, "keyUser");

        if($keyUser == $orla["keyOrla"]) {
            
            $access = true;
            $response->setSession("access", $access);
            $response->setSession("keyOrla", $keyUser);
            $response->redirect("location: /view-orla?idOrla=".$idOrla);

        } else {

            $access = false;
            $response->setSession("access", $access);
            $response->redirect("location: /view-orla?idOrla=".$idOrla);

        }

        return $response;
    }
}
