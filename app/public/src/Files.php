<?php

class Files
{
    public array $array = [];

    function __construct($_FILES)
    {
        $this->array = $arr;
    }

    function has($key): bool{
        return array_key_exists($key, $this->array);
    }

    function get($key)
    {
        if($this->has($key)){
            return $this->array[$key];
        }
        else{
            throw new Exception("Element is missing");
        }
    }

}