<?php
namespace App\Controllers;

class Professors{

    public function ctrlIndex ($request, $response, $container){

        $response->SetTemplate("infogrupP.php");

        return $response;
    }
}