<?php

namespace App\Controllers;

class ViewOrla{ //siempre poner ctrlIndex para mantener la pagina


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("orla.php");

        return $response;
    }
}
