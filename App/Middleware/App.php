<?php

namespace App\Middleware;
use \Emeset\Contracts\Http\Request;
use \Emeset\Contracts\Http\Response;
use \Emeset\Contracts\Container;

class App { 

    public static function execute(Request $request, Response $response, Container $container, $next) :Response
    {
        // Code before FrontConroller
        

        

        $response->set("app_config", $container["config"]);
        //echo "App Middleware";
        $response = \Emeset\Middleware::next($request, $response, $container, $next);
        // Code after FrontConroller

       
        $logged = $request->get("SESSION","logged"); 
        $response->set("logged",$logged);

        $user = $request->get("SESSION","user"); 
        $response->set("user",$user);


        return $response;
    }
}