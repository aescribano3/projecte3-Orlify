<?php

namespace App\Models;

class GrupUser
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }
}