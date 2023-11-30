<?php
namespace App\Controllers;

class Controlpanel{

    public function ctrlIndex ($request, $response, $container){

        $GrupModel = $container->get("grup");
        $grups = $GrupModel->getAll();

        $response->set("grups", $grups);

        $response->SetTemplate("infodades.php");

        return $response;
    }
}