<?php
namespace App\Controllers;

class Professors{

    public function ctrlGrupOrla ($request, $response, $container){

        $response->SetTemplate("infogruporla.php");

        return $response;
    }
}