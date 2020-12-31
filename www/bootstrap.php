<?php 

$db_config = require 'config/config.php';

require 'db/QueryBuilder.php';
require 'db/Connection.php';
require 'routes/Request.php';
require 'routes/Router.php';


return new QueryBuilder(
    Connection::initDB($db_config['db'])
);

