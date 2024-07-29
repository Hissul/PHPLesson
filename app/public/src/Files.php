<?php

include ('../public/src/File.php');

$file = new File($_FILES['key']['name'],$_FILES['key']['type'],$_FILES['key']['tmp_name'],
                $_FILES['key']['error'],$_FILES['key']['size']);

class Files
{  
    public array $array = [];

    public function __construct($files)
    {
        foreach($files['key'] as $key => $value){
            $this->array[$key] = $value;
        }
        
    }

    public function has($key): bool{       
        return key_exists($key, $this->array);     
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

    public function moveTo($file, string $path)
    {        
        if($file['error'] == UPLOAD_ERR_OK){
            $tmpName = $file['tmp_name'];

            $name = basename($file['name']);
            move_uploaded_file($tmpName, $path.$name);
        }
    }

}