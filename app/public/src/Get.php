<?php

class Get
{
    public array $array = [];

    public function __construct($files)
    {
        foreach($files['key'] as $key => $value){
            $this->array[$key] = $value;
        }
        
    }

    public function has($key): bool{
        return key_exists($key['key'], $this->array);
    }

    public function get($key)
    {
        if($this->has($key)){
            return $this->array[$key];
        }
        else{
            throw new Exception("Element is missing");
        }
    }
}