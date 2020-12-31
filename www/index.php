<?php

require 'app/views/statics/_head.php';


$database = require 'bootstrap.php';
$router = Router::load('routes/routes.php');

require $router->direct(Request::uri());

