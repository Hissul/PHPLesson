<?php

namespace PathHandler;

use Routing\Route;

class PathHandler
{
    private Route $route;

    public function __construct(string $requestUri)
    {
        $this->route = new Route($_SERVER['REQUEST_URI']);
    }

    public function remakePath(array $array):array
    {        
        $newArr = [];

        foreach($array as $value){

            if(strpbrk($value, '-') || strpbrk($value, '_')){
                $arr = preg_split("/[-_]/",$value); // split the sting by -_ simbols

                $resultStr = "";

                foreach($arr as $v){
                    $newStr = ucfirst($v); // first later  to upper                    
                    $resultStr = $resultStr . $newStr;
                }
                
                array_push($newArr, $resultStr);
            }
            else{
                $newStr = ucfirst($value);               
                array_push($newArr, $newStr);
            }
        }

        return $newArr;
    }
    
}