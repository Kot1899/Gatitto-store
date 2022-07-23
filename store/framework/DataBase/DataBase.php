<?php

class DataBase
{
    public static function  getConnection()
    {
        $paramPath= ROOT.'/../framework/config/db.php';

        //check atach file
        if(file_exists($paramPath))
        {
            $params= include ($paramPath);
        }else
        {
            echo '<br>'.'Vitali, file with DBPath was 
        not found and do not include'.'<br>';
        }

        //connection to DB

        $connection =new PDO ('mysql:host=' . $params['host'] .
            ';dbname=' . $params['name'], $params['user'],
            $params['password'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $connection;
    }
}