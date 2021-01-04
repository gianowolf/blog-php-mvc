<?php 

switch (Request::uri())
{
    case 'new_users':
        require 'app/views/users/new.php';
        break;
    case 'show_users':
        require 'app/views/users/show.php';
    case 'add_users':
        require 'app/models/users.php';
        $users = new User($app['database'], $_users);
        header('Location: /blog');
    default:
        break;
}