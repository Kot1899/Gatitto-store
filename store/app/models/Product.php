<?php

//check atach file
$path=(ROOT . '/../framework/config/db.php');
if(file_exists($path))
{
    include ($path);
}else
{
    echo '<br>'.'Vitali, file with DBPath was not found and do not include'.'<br>';
}

class ProductPage
{
    /**
     * return only one card
     */

    public static function getProductById($name)
    {
        if ($name)
        {
//            request to DB
            $connection= DataBase::getConnection();

            $stm='select * from GoodsPage where id='.$name;

            $result = $connection->query($stm);
            $productName=$result->fetch(PDO::FETCH_ASSOC);

            return $productName;
        }

    }
}