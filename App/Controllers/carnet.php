<?php

namespace App\Controllers;

class Carnet{


    /**
     * Show the carnet with the alumne data
     *
     * @param   user    $user       Session user
     * @param   int      $userId     User id
     * @param   int      $idGrup     Grup id
     * @param   grupName    $grupName   Grup name
     * @param   grupCurs    $grupCurs   Grup curs
     *
     * @return              carnet view
     */
    public function ctrlIndex($request, $response, $container) {
        
        $grupUserModel = $container->get("grupuser");
        $user = $_SESSION["user"];
        $userId = $user["idUser"];

        $infoGrup = $grupUserModel->getidGrup($userId);
        $idGrup = $infoGrup["idGrup"];

        $info = $grupUserModel->getNameGrup($userId, $idGrup);
        $grupName = $info["name"];
        $grupCurs = $info["curs"];
        
        $response->set("grupName" , $grupName);
        $response->set("grupCurs" , $grupCurs);
        $response->SetTemplate("carnet.php");

        return $response;
    }
}
