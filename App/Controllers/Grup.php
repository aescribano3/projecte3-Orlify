<?php
namespace App\Controllers;

class Grup{

    public function createGrup ($request, $response, $container){

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

    public function modifiGrup ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");
        $grupname = $request->get(INPUT_POST, "grupname");
        $grupcurs = $request->get(INPUT_POST, "grupcurs");
        $grupteacher = $request->get(INPUT_POST, "grupteacher");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->modifiGrup($id, $grupname, $grupcurs, $grupteacher);

        if($GrupModel){
            $response->setSession("ajax-message","Grup modificat correctament");
        } else {
            $response->setSession("ajax-message","Error al modificar el grup");
        }

        return $response;
    }

    public function dropGrup ($request, $response, $container){

        $id = $request->get(INPUT_POST, "id");

        $GrupModel = $container->get("grup");

        $GrupModel = $GrupModel->dropGrup($id);

        if($GrupModel){
            $response->setSession("ajax-message","Grup eliminat correctament");
        } else {
            $response->setSession("ajax-message","Error al eliminar el grup");
        }

        return $response;
    }
}