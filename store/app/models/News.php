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

class News
{
    /**
     * @param int $id
     * return one news
     */
    public static function getNewsById($id)
    {
        //request to DB
    }

    /**
     * return list of news
     */

    public static function getNewsList()
    {
        //request to DB
        $connection= DataBase::getConnection();

        $newsList=array();

        $stm='select id, title, date, short_content '
            . ' from news'
            .' ORDER BY id ASC'
            .' LIMIT 2';

        $result = $connection->query($stm);

        $i=0;
        while( $row =$result->fetch(PDO::FETCH_ASSOC))
        {
            $newsList[$i]['id']=$row['id'];
            $newsList[$i]['title']=$row['title'];
            $newsList[$i]['date']=$row['date'];
            $newsList[$i]['short_content']=$row['short_content'];
            $i++;
        }
        return $newsList;

    }
}