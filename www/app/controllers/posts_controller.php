<?php

switch (Request::uri())
{
    case 'new_post':
        require 'app/views/post/new.php';
        break;

    case 'show_post':
        $post = Post::getPost($app['database'], $_GET['post']);
        $body = Post::generateMD($post->body);
        require 'app/views/post/show.php';
    
        break;

    
    case 'add_post':
            $post = new Post($app['database'], $_POST);
        header('Location: /blog');
        break;
        
    default:
        break;
}
