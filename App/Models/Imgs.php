<?php

namespace App\Models;

class Imgs
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }
}