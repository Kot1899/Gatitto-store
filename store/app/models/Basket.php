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

class Basket
{
     /**
     * return data about product for basket
     */

    public static function getBasketList()
    {
        //request to DB
        $connection= DataBase::getConnection();

        $basketList=array();

        $stm='select * from GoodsPage where id=1';

        $result = $connection->query($stm);

        $i=0;
        while( $row =$result->fetch(PDO::FETCH_ASSOC))
        {
            $basketList[$i]['id']=$row['id'];
            $basketList[$i]['name']=$row['name'];
            $basketList[$i]['breed']=$row['breed'];
            $basketList[$i]['age']=$row['age'];
            $basketList[$i]['story']=$row['story'];
            $basketList[$i]['character_cat']=$row['character_cat'];
            $basketList[$i]['soldi']=$row['soldi'];
            $i++;
        }
        return $basketList;

    }
}