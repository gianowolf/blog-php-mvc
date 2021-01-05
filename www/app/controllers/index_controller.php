<?php 
class IndexController
{
    public function home()
    {
        require 'app/views/home/index.php';
    }

    public function about()
    {
        require 'app/views/about/index.php';
    }

    public function contact()
    {
        require 'app/views/contact/index.php';
    }

    public function blog()
    {
        $posts = App::get('database')->where("posts","published=1");

        require 'app/views/blog/index.php';
    }
}