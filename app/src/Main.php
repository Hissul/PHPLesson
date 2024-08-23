<?php

use Request\Get;
use Request\Post;
use Request\Request;
use Request\Server;
use Routing\Route;
use Shop\Customer\Order;

class Main
{   
    private Request $request;

    public function main(): void
    {
        $this->init();
        
        print_r($this->request->getGet());
        print_r($this->request->getPost());
        print_r($this->request->getServer());       
    }

    private function init() : void
    {
        spl_autoload_register(function($request){
            $file = __DIR__ . '/' . str_replace('\\','/', $request).'.php';  

            if(file_exists($file)){                
                include($file);

                return true;
            }

            return false;
        });     

        $this->request = new Request($_GET, $_POST, $_SERVER);        
    }
}