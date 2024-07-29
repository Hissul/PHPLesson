<?php



include ('../public/src/Get.php');
include ('../public/src/Post.php');
include ('../public/src/Files.php');

// $get = new Get($_FILES);
// $post = new Post($_FILES);
// $files = new Files($_FILES);



class Request
{
    public $get ;
    public $post ;
    public $files ;

    public function __construct()
    {
        $this->get = new Get($_FILES);
        $this->post = new Post($_FILES);
        $this->files = new Files($_FILES);
    }
}


