<?php

switch (Request::uri())
{
    case 'new_post':
        require 'app/views/post/new.php';
        break;
    case 'show_post':
        require 'app/views/post/show.php';
    case 'add_post':
        require 'app/models/Post.php';
        $post = new Post($app['database'], $_POST);
        header('Location: /blog');
    default:
        break;
}