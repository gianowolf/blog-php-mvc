<?php

$database = require 'bootstrap.php';
$router = Router::load('routes/routes.php');

require $router->direct(Request::uri());

