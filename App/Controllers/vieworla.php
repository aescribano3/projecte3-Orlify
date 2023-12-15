<?php

namespace App\Controllers;

class ViewOrla{ //siempre poner ctrlIndex para mantener la pagina


    public function ctrlIndex($request, $response, $container)
    {
        /*$orlaModel = $container->get("orla");
        $orla = $orlaModel->getViewOrla();

        $response->set("orla", $orla);*/

        $orlaModel = $container->get("orla");
        $usersOrla = $orlaModel->getUserOrla(2);
        die(var_dump($usersOrla));

        $response->SetTemplate("orla.php");

        return $response;
    }
}
