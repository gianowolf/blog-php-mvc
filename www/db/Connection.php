<?php

class Connection{

    public static function initDB($config)
    {
        $usr = 'gfl';
        $pass= '12345';

        try
        {
            return new PDO(
                $config['mysql'].';'. $config['dbname'],
                $config['username'],
                $config['password'],
            );
        }
        catch(PDOException $e)
        {
            die ($e->getMessage());
        }
    }

}