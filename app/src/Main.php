<?php

include ('../PathHandler/PathHandler.php');

use Request\Get;
use Request\Post;
use Request\Server;
use Routing\Route;
use Shop\Customer\Order;
use PathHandler\PathHandler;

class Main
{  
    private PathHandler $pathHandler;

    public function main(): void
    {
        $this->init();

        $namespace = $this->route->getParent();

        $base = $this->route->getBase();

        if($base){
            $class = 'Controllers\\' . implode('\\',$namespace ). '\\' . $base[0];
            
            $object = new $class();

            if($this->server->isGet()){
                echo $object -> getRequest($this->get);     
            } 
            elseif($this->server->isPost()){
                echo $object -> postRequest($this->post); 
            }
        }

        print_r($this->pathHandler->remakePath());
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

        $this->pathHandler = new PathHandler($_SERVER['REQUEST_URI']);
    }


}