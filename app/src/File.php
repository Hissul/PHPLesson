<?php

class File
{
    private string $name;
    private string $type;
    private string $tmp_name;
    private string $error;
    private string $size;

    public function __construct(string $name, string $type, string $tmp_name, string $error, string $size)
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