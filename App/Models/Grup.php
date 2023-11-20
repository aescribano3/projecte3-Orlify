<?php

namespace App\Models;

class Grup
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }
}