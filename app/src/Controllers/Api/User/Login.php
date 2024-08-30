<?php

namespace Controllers\Api\User;

use Request\Post;

class Login
{    
    public function postRequest(Post $request) : void
    {
        echo("You are inside Controllers\Api\User\Login");        
    } 
}
