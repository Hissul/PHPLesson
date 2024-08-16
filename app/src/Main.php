<?php

use Request\Get;
use Request\Post;
use Request\Server;
use Routing\Route;
use Shop\Customer\Order;

class Main
{   
    private Get $get;

    private Post $post;

    private Server $server;

    private Route $route;

    public function main(): void
    {
        $this->init();

        $namespace = $this->route->getParent();

        $base = $this->route->getBase();

        if($base){
            $class = implode('\\',$namespace ). '\\' . $base[0];
            
            $object = new $class();
        }
       
    }


    private function init() : void
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


}