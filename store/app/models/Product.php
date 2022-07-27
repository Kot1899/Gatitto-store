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
     * return list
     */

    public static function getProductPage()
    {
        //request to DB
        $connection= DataBase::getConnection();

        $productList=array();

        $stm='select id, name, breed, age, story, character_cat, soldi from GoodsPage where id<7';

        $result = $connection->query($stm);

        $i=0;
        while( $row =$result->fetch(PDO::FETCH_ASSOC))
        {
            $productList[$i]['id']=$row['id'];
            $productList[$i]['name']=$row['name'];
            $productList[$i]['breed']=$row['breed'];
            $productList[$i]['age']=$row['age'];
            $productList[$i]['story']=$row['story'];
            $productList[$i]['character_cat']=$row['character_cat'];
            $productList[$i]['soldi']=$row['soldi'];
            $i++;
        }
        return $productList;

    }

    /**
     * return only one card
     */

    public static function getProductById($id)
    {
        if ($id)
        {
            $id= intval($id);
//            request to DB
            $connection= DataBase::getConnection();

            $stm='select * from GoodsPage where id='.$id;

            $result = $connection->query($stm);
            $productId=$result->fetch(PDO::FETCH_ASSOC);

            return $productId;

        }

    }
}