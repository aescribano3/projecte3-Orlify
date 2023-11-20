<?php

namespace App\Models;

class Users
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }
}