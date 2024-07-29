<?php


//print_r($_FILES);

include ('../public/src/Files.php');





$fl = new Files($_FILES);
print_r($fl->array);

print_r ($fl->has("name"));