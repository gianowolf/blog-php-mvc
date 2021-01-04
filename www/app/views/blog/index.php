<?php 
require 'app/views/partials/_head.php';
require 'app/views/partials/_navbar.php'; 
?>

<h1>Blog<h1>
<h3><a href="new_post">Write Some Stuff</a></h3>


<?php

foreach ($posts as $post) {
    require 'app/views/blog/_post.php';
}

require 'app/views/partials/_footer.php';