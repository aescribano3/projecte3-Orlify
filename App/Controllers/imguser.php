<?php

namespace App\Controllers;

class Imguser{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("imgiorla.php");

        return $response;
    }

    public function ctrlorla($request, $response, $container)
    {

        $response->SetTemplate("verimagenorla.php");

        return $response;
    }
}
