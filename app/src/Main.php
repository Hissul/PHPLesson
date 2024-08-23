<?php

use Request\Autoload;

class Main
{   
    private Autoload $autoload = new Autoload();

    public function main(): void
    {
        $this->autoload -> init();

        $namespace = $this->autoload->getRoute()->getParent();

        $base = $this->autoload->getRoute()->getBase();

        if($base){
            $class = implode('\\',$namespace ). '\\' . $base[0];
            
            $object = new $class();
            $object -> getRequest($this->autoload->getGet());            
        }       

        print_r($this->autoload->getRoute()->getParent());
    }
}