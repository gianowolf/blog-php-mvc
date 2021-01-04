<?php

$app['database']->insert('users',[
    'title' => $_POST['title'],
    'subtitle' => $_POST['subtitle'],
    'published' => ['1'],
    'body' => $_POST['body'],
    'image' => $_POST['image']
]);

