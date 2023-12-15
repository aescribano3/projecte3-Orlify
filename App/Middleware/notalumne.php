<?php

namespace App\Middleware;

class notalumne
{

    /**
     * Middleware que gestiona l'autenticació
     *
     * @param \Emeset\Http\Request $request petició HTTP
     * @param \Emeset\Http\Response $response resposta HTTP
     * @param \Emeset\Container $container  
     * @param callable $next  següent middleware o controlador.   
     * @return \Emeset\Http\Response resposta HTTP
     */
    public static function notalumne($request, $response, $container, $next)
    {
        $logged = $request->get("SESSION", "logged");


        $yes = false;

        $user = $request->get("SESSION", "user");

        

        if (isset($logged)) {
            if($user["rol"]!='alumne' && $user["rol"]!=''){
                $yes = true;
            }
        }

        $response->set("user", $user);

        // si l'usuari està logat permetem carregar el recurs
        if ($yes) {
            $response = \Emeset\Middleware::next($request, $response, $container, $next);
        } else {
            $response->redirect("location: /");
        }

        return $response;
    }
}