<?php
namespace App\Controllers;

class ResetPassword{

    public function ctrlIndex($request, $response, $container) {
        // zona horaria de españa/ madrid
        date_default_timezone_set('Europe/Madrid'); // esto es para que la hora sea la de españa
        
        $token = $request->get(INPUT_GET, "token");
        $token_hash = hash("sha256", $token);

        $userModel = $container->get("users");
        $getHashToEqualToken = $userModel->getHashToEqualToken($token_hash);

        $tokonAComprovar = $getHashToEqualToken["reset_token_hash"];
        
        if($tokonAComprovar != $token_hash){
            $response->SetTemplate("Error.php");
            return $response;
        }

        // strtotime converteix a segons la data i time() genera el temps actual en segons
        
        if( strtotime($getHashToEqualToken["reset_token_expires_at"]) <= time() ){
            $response->SetTemplate("Error.php");
            return $response;
        }

        $response->set("token", $token);
        $response->SetTemplate("reset-password.php");
        return $response;
    }
    public function ctrlDoResetPassword($request, $response, $container) {
        $token = $request->get(INPUT_POST, "token");
        $token_hash = hash("sha256", $token);

        $userModel = $container->get("users");
        $getHashToEqualToken = $userModel->getHashToEqualToken($token_hash);

        $tokonAComprovar = $getHashToEqualToken["reset_token_hash"];
        
        if($tokonAComprovar != $token_hash){
            $response->SetTemplate("Error.php");
            return $response;
        }
        
        if( strtotime($getHashToEqualToken["reset_token_expires_at"]) <= time() ){
            $response->SetTemplate("Error.php");
            return $response;
        }

        $passwordNew_A = $request->get(INPUT_POST, "password");
       

        $passwordNew_B = $request->get(INPUT_POST, "confirm-password");

        if ($passwordNew_A == $passwordNew_B) {	
            $passwordNew_AHash = password_hash($passwordNew_A, PASSWORD_DEFAULT, ["cost" => 12]);   
            $updatePassword = $userModel->updatePassword($token_hash, $passwordNew_AHash);
            if($updatePassword){
                $confirm = "Contrasenya Canviada Correctament";
                $response->set("confirm", $confirm);
                $response->SetTemplate("ConfirmChangePs.php");
                return $response;
            }     
        }
 

        $response->setTemplate("portada.php");
        return $response;
    }





}