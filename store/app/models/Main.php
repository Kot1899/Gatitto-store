<?php

class MainPage
{
    /**
     * return list
     */

    public static function getMainPage()
    {
        //request to DB
        $connection = DataBase::getConnection();

        $mainList = array();

        $stm = 'select id, title, img, description from MainPage where id=4';

        $result = $connection->query($stm);

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $mainList[$i]['id'] = $row['id'];
            $mainList[$i]['title'] = $row['title'];
            $mainList[$i]['img'] = $row['img'];
            $mainList[$i]['description'] = $row['description'];
            $i++;
        }
        return $mainList;
    }
}
