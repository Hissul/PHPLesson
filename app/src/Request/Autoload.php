<?php

namespace Request;

use Request\Get;
use Request\Post;
use Request\Server;
use Routing\Route;

class Autoload
{
    private Get $get;

    private Post $post;

    private Server $server;

    private Route $route;

    public function init() : void
    {
        spl_autoload_register(function($class){
            $file = __DIR__ . '/' . str_replace('\\','/', $class).'.php';  

            if(file_exists($file)){                
                include($file);
                return true;
            }

            return false;
        });

        $this->get = new Get($_GET);
        $this->post = new Post($_POST);
        $this->server = new Server($_SERVER);

        $this->route = new Route($_SERVER['REQUEST_URI']);
    }

    public function getGet(): Get
    {
        return $this->get;
    }

    public function getPost(): Post
    {
        return $this->post;
    }

    public function getServer(): Server
    {
        return $this->server;
    }

    public function getRoute(): Route
    {
        return $this->route;
    }
}