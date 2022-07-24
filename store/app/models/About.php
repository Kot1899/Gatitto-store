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

class About
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

    public static function getAboutList()
    {
        //request to DB
        $connection= DataBase::getConnection();

        $aboutList=array();

        $stm='select id, title, description, footer from AboutPage where id=1';

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
        return $aboutList;

    }
}