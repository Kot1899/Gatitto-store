<?php

class About
{
    /**
     * return list of news
     */

    public static function getAboutList()
    {
        //request to DB
        $connection = DataBase::getConnection();

        $aboutList = array();

        $stm = 'select id, title, description, footer from AboutPage where id=1';

        $result = $connection->query($stm);

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $aboutList[$i]['id'] = $row['id'];
            $aboutList[$i]['title'] = $row['title'];
            $aboutList[$i]['description'] = $row['description'];
            $aboutList[$i]['footer'] = $row['footer'];
            $i++;
        }
        return $aboutList;
    }
}
