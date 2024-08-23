<?php

use Request\Autoload;

class Main
{ 
    private Autoload $autoload;

    public function main(): void
    {
        $this->init(); 

        $this->autoload->init();

        $namespace = $this->autoload->getRoute()->getParent();

        $base = $this->autoload->getRoute()->getBase();

        if($base){
            $class = implode('\\',$namespace ). '\\' . $base[0];
            
            $object = new $class();
            $object -> getRequest($this->autoload->getGet());            
        }       

        print_r($this->autoload->getRoute()->getParent());
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

        $this->autoload = new Autoload();
    }
}