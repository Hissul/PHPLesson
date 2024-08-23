<?php

namespace Request;

use Request\Get;
use Request\Post;
use Request\Server;

class Request
{
    private Get $get;

    private Post $post;

    private Server $server;

    public function __construct(array $get, array $post, array $server)
    {
        $this->get = new Get($get);
        $this->post = new Post($post);
        $this->server = new Server($server);
    }

    public function getGet():Get
    {
        return $this->get;
    }

    public function getPost(): Post
    {
        return $this->post;
    }

    public function getServer(): Server
    {
        return $this->server;
    }

  
    
}