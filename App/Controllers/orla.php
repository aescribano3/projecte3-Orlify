<?php

namespace App\Controllers;

class Orla{ //siempre poner ctrlIndex para mantener la pagina


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("orla.php");

        return $response;
    }
}
