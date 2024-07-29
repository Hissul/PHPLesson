<?php

use LDAP\Result;

include ('../src/Get.php');
include ('../src/Post.php');
include ('../src/Files.php');

$get = new Get($_FILES);
$post = new Post($_FILES);
$files = new Files($_FILES);



class Reques
{
    var $get = new Get($_FILES);
    var $post = new Post($_FILES);
    var $files = new Files($_FILES);
}

$request = new Reques();
$request::$get->has("name");

print_r($_FILES);