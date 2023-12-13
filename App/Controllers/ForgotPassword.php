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
        $expira = date("Y-m-d H:i:s", time() + 60 * 15); // el date genera una data amb el format Y-m-d H:i:s i el time() genera el temps actual en segons i el multiplica per 60 per a que siguen minuts i despres per 15 per a que expiri en 15 minuts


        $userModel = $container->get("users");
        $updateUserSetToken = "";
        if ($email && $token_hash && $expira) {
            $updateUserSetToken = $userModel->updateUserSettoken($email, $token_hash, $expira);
            if ($updateUserSetToken) {
                 $mail = $this->mailer();
                 $mail->setFrom("noreplay@orlifyexample.com");
                 $mail->addAddress($email);
                 $mail->Subject = "Recuperar contrasenya";
                 $mail->Body = <<<END
                     Recupera tu password <a href="http://localhost:8080/reset-password?token=$token">aqui</a>
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
    public function mailer() {
         $mail = new PHPMailer(true);
        //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
         $mail->isSMTP();                                            // Send using SMTP
         $mail->SMTPAuth = true;                                   // Enable SMTP authentication

         $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       // Enable TLS encryption;
         $mail->Port       = 587;                                 // TCP port to connect to, use 465 
         $mail->Username   = "amineryouchorlify@gmail.com";          // SMTP username
         $mail->Password   = "ttck ceea roug eyie";                 // SMTP password

         $mail->isHTML(true);                                  // Set email format to HTML

         return $mail;
     }
}
