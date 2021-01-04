<?php 

return [
    'database' => [
        'mysql' => 'mysql:host=mysql',
        'dbname' => 'dbname=blog',
        'root' => 'root',
        'username' => 'gfl',
        'password' => '12345',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
