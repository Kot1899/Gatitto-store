<?php

class Goods
{
    /**
     * return list of news
     */

    public const SHOW_BY_DEFAULT = 6;

    public static function getGoodsList($count = self::SHOW_BY_DEFAULT)
    {
        //request to DB
        $connection = DataBase::getConnection();

        $goodsList = array();


        $stm = 'select id, name, breed, age, story, character_cat, soldi 
              from GoodsPage limit ' . $count ;

        $result = $connection->query($stm);

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $goodsList[$i]['id'] = $row['id'];
            $goodsList[$i]['name'] = $row['name'];
            $goodsList[$i]['breed'] = $row['breed'];
            $goodsList[$i]['age'] = $row['age'];
            $goodsList[$i]['story'] = $row['story'];
            $goodsList[$i]['character_cat'] = $row['character_cat'];
            $goodsList[$i]['soldi'] = $row['soldi'];
            $i++;
        }
        return $goodsList;
    }
}
