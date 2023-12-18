<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

class ForgotPassword
{


    public function ctrlIndex($request, $response, $container)
    {
        $response->SetTemplate("forgot-password.php");
        return $response;
    }

    public function ctrlDoForgotPassword($request, $response, $container) {

        $email = $request->get(INPUT_POST, "emailRC");
        $token = bin2hex(random_bytes(16)); // el bin2hex converteix a hexadecimal y el random_bytes genera un string aleatori de 16 bytes
        $token_hash = hash("sha256", $token); // el hash genera un hash sha256 del token

        // la zona horaria de españa/ madrid
        date_default_timezone_set('Europe/Madrid'); // esto es para que la hora sea la de españa
        $expira = date("Y-m-d H:i:s", time() + 60 * 10); // el date genera una data amb el format Y-m-d H:i:s i el time() genera el temps actual en segons i el multiplica per 60 per a que siguen minuts i despres per 10 per a que expiri en 10 minuts

        $userModel = $container->get("users");
        $updateUserSetToken = "";
        if ($email && $token_hash && $expira) {
            $updateUserSetToken = $userModel->updateUserSettoken($email, $token_hash, $expira);
            if ($updateUserSetToken) {

                $obtenerDatosMailer = $container->get("mailer");
                $mail = $obtenerDatosMailer["mail"];
                $domain = $obtenerDatosMailer["domain"];

                $mail->setFrom("noreplay@orlifyexample.com"); 
                $mail->addAddress($email);
                $mail->Subject = "Recuperar contrasenya";
                $mail->Body = <<<END
                     Recupera tu password <a href="{$domain}?token=$token">aqui</a>
                    END;
                    try {
                        $mail->send();
                        $comfirmation = "Correu Enviat";
                        $response->set("comfirmation", $comfirmation);
                    } catch (Exception $e) {
                        echo "Correu No Enviat. Mailer Error: {$mail->ErrorInfo}";
                    }
            }
        }

        $response->set("email", $email);
        $response->SetTemplate("viewSendConfirmation.php");
        return $response;
    }
}
