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