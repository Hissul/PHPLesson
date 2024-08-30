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


    // 
    public function remakePath():string
    {
        $parent = $this->route->getParent();
        $base = $this->route->getBase();      

        $resultStr = "";

        foreach($parent as $value){

            if(strpbrk($value, '-') || strpbrk($value, '_')){
                $arr = preg_split("/[-_]/",$value); // split the sting by -_ simbols

                foreach($arr as $v){
                    $newStr = ucfirst($v); // first later  to upper                    
                    $resultStr = $resultStr . $$newStr;
                }
                $resultStr = $resultStr . "\\";
            }
            else{
                $newStr = ucfirst($value);               
                $resultStr = $resultStr . $newStr . "\\";
            }
        }

       foreach($base as $value){

            if(strpbrk($value, '-') || strpbrk($value, '_')){
                $arr = preg_split("/[-_]/",$value); // split the sting by -_ simbols

                foreach($arr as $v){
                    $newStr = ucfirst($v); // first later  to upper
                    $resultStr = $resultStr . $newStr;
                }
                $resultStr = $resultStr ;
            }
            else{
                $newStr = ucfirst($value);
                $resultStr = $resultStr . $newStr;
            }
       }

        return $resultStr;
    }
}