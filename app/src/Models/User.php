<?php

namespace Models;
use Database\DB;

class User
{
    public ?int $id;

    public ?string $login;

    public ?string $password;

    public ?string $token;

    public static function getAllUsers(): array
    {
        $rows = DB::getInstance()-> getRowByClass('SELECT * FROM users;', self::class);

        // foreach($rows as $row){  
        //    var_dump($row);
        // }

        return $rows;
    }
}