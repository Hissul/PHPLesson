<?php

namespace Controllers\Api;

use Request\Post;
use Database\DB;
use Models\User;

class Login
{

    /**
     * @param Post $request
     * @return string
     */

    public function postRequest(Post $request) : string
    {
        // $allUsers = User::getAllUsers();
        // print_r($allUsers);  

        if($request->has("login") && $request->has("password")){            

            $user = User::getUserByLogin($request->get("login"));
            

            if($user && $user->login === $request->get("login") && $user->password === $request->get("password")){

                // сохранение токена в БД
                User::updateUser($user->login, md5($user->password));

                return json_encode(["token" => md5($user->password)]);                
            }
            else{
                return json_encode(["error" => "User not found"]);
            }
        }
        
        return  '';
    }
}