<?php


namespace App;

use Emeset\Container as EmesetContainer;

class Container extends EmesetContainer
{

    public function __construct($config)
    {
        parent::__construct($config);

        $dbType = $this->get("config")["db_type"];
        if ($dbType == "PDO") {

            $this["users"] = function ($c) {
                return new \App\Models\Users($c["db"]->getConnection());
            };

            $this["imgs"] = function ($c) {
                return new \App\Models\Imgs($c["db"]->getConnection());
            };

            $this["orla"] = function ($c) {
                return new \App\Models\Orla($c["db"]->getConnection());
            };

            $this["grup"] = function ($c) {
                return new \App\Models\Grup($c["db"]->getConnection());
            };

            $this["grupuser"] = function ($c) {
                return new \App\Models\GrupUser($c["db"]->getConnection());
            };
            $this["plantilla"] = function ($c) {
                return new \App\Models\Plantilla($c["db"]->getConnection());
            };

            $this["db"] = function ($c) {
                return new \App\Models\Db(
                    $c["config"]["db"]["user"],
                    $c["config"]["db"]["pass"],
                    $c["config"]["db"]["db"], 
                    $c["config"]["db"]["host"]
                );
            };
        }
    }
}