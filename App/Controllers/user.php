<?php
namespace App\Controllers;

class User{

    public function checkuser ($request, $response, $container){

        $grupname = $request->get(INPUT_POST, "grupname");
        $grupcurs = $request->get(INPUT_POST, "grupcurs");
        $grupteacher = $request->get(INPUT_POST, "grupteacher");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->createGrup($grupname, $grupcurs, $grupteacher);

        if($GrupModel){
            $response->setSession("ajax-message","Grup creat correctament");
        } else {
            $response->setSession("ajax-message","Error al crear el grup");
        }

        return $response;
    }
}