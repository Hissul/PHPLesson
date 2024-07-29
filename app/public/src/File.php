<?php

class File
{
    private  $name;
    private  $type;
    private  $tmp_name;
    private  $error;
    private  $size;

    public function __construct( $name, $type, $tmp_name, $error, $size)
    {
        $this->name = $name;
        $this->type = $type;
        $this->tmp_name = $tmp_name;
        $this->error = $error;
        $this->size = $size; 
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType() : string
    {
        return $this->type;
    }

    public function getTmpName() : string
    {
        return $this->tmp_name;
    }

    public function getError() : string
    {
        return $this->error;
    }

    public function getsize() : string
    {
        return $this->size;
    }

}