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

class Goods
{
    /**
     * return list of news
     */

    public static function getGoodsList()
    {
        //request to DB
        $connection= DataBase::getConnection();

        $goodsList=array();

        $stm='select id, title, description, footer from GoodsPage where id=1';

        $result = $connection->query($stm);

        $i=0;
        while( $row =$result->fetch(PDO::FETCH_ASSOC))
        {
            $aboutList[$i]['id']=$row['id'];
            $aboutList[$i]['title']=$row['title'];
            $aboutList[$i]['description']=$row['description'];
            $aboutList[$i]['footer']=$row['footer'];
            $i++;
        }
        return $goodsList;

    }
}