<?php
namespace App\Controllers;

class Controlpanel{

    public function ctrlIndex ($request, $response, $container){

        $response->SetTemplate("infodades.php");

        return $response;
    }
}