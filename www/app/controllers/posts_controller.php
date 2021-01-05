<?php
class PostsController
{
    public function new()
    {
        require 'app/views/post/new.php';
    }

    public function show()
    {
        $post = Post::getPost(App::get('database'), $_GET['post']);
        $body = Post::generateMD($post->body);
        require 'app/views/post/show.php';
    }

    public function add()
    {
        $post = new Post(App::get('database'), $_POST);
        header('Location: /blog');
    }

    public function edit()
    {

    }
}

