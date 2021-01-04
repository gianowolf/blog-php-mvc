<?

//POSTS
$posts = $app['database']->where("posts","published=1");

require 'app/views/blog/index.php';
