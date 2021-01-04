<?php 

$app = [];

$app['config'] = require 'config/config.php';

require 'db/QueryBuilder.php';
require 'db/Connection.php';
require 'routes/Request.php';
require 'routes/Router.php';


$app['database'] = new QueryBuilder(
    Connection::initDB($app['config']['database'])
);