<?php


/* PORTFOLIO */

//index
$router->get('/','app/controllers/index_controller.php');
$router->get("",'app/controllers/index_controller.php');
$router->get('index','app/controllers/index_controller.php');
$router->get('home','app/controllers/index_controller.php');
//others
$router->get('about','app/controllers/about_controller.php');
$router->get('contact','app/controllers/contact_controller.php');

/* BLOG */
//blog
$router->get('blog','app/controllers/blog_controller.php');

//posts
$router->get('new_post','app/controllers/posts_controller.php');
$router->get('show_post','app/controllers/posts_controller.php');
$router->post('add_post','app/controllers/posts_controller.php');

//profile
$router->get('profile','app/controllers/profile_controller.php');