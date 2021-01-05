<?php
/* PORTFOLIO */
//index
$router->get('/','IndexController@home');
$router->get("",'IndexController@home');
$router->get('index','IndexController@home');
$router->get('home','IndexController@home');
//others
$router->get('about','IndexController@about');
$router->get('contact','IndexController@contact');
$router->get('blog','IndexController@blog');

/* BLOG */
//posts
$router->get('new_post','PostsController@new');
$router->get('show_post','PostsController@show');
$router->post('add_post','PostsController@add');
$router->get('edit_post','PostsController@edit');
$router->post('refresh_post','PostsController@refresh');
//profile
// $router->get('profile','app/controllers/profile_controller.php');