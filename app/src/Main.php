<?php

class Main{
    public string $public = "public";
    protected $protected = "protected";
    private $private = "private";

    public static $ps = "public static";

    public function func() : int {
        return 1;
    }

    public static function statFunc(int &$num) : void {
        $num++;
    }

}