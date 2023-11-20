<?php

namespace App\Models;

class Orla
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }
}