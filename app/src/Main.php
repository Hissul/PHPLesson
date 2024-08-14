<?php

use Shop\Customer\Order;

class Main
{   
    public function main(): void
    {
        $this->init();

        echo 'RUN SUCCESSFUL';

        $order = new Order();

        print_r($order);
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
    }


}