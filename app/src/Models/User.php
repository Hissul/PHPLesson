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

    public static function getUserByLogin(string $login): mixed
    {  
        $requestStr = 'SELECT * FROM users WHERE login=' . '\'' . $login . '\'';  
        $user = DB::getInstance()-> getSingleRowByClass($requestStr, self::class); 

        return $user;
    }

    public static function updateUser(string $login, string $token)
    {
        $requestStr = 'UPDATE users SET token=' . '\'' . $token . '\'' . 'WHERE login=' . '\'' . $login . '\'';
    
        DB::getInstance()->query($requestStr);
    }
  


}