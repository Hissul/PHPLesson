<?php

include ('../public/src/Request.php');

$request = new Request();

print_r($request->files->array);
var_dump($request->files->has('error'));

$newDir = '../public/downloads/';

// не перемещает файл ... 
// Failed to open stream:No such file or directory in /app/public/src/Files.php on line 40
$request->files->moveTo($request->files->array, $newDir);