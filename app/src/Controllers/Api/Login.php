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
        $allUsers = User::getAllUsers();
        print_r($allUsers);
        return  '';
    }
}