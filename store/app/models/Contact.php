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

class Contact
{

    /**
     * return list of news
     */

    public static function getContactList()
    {
        //request to DB
        $connection = DataBase::getConnection();

        $contactList = array();

        $stm = 'select id, email, phone, location, work_time from ContactPage ';

        $result = $connection->query($stm);

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $contactList[$i]['id'] = $row['id'];
            $contactList[$i]['email'] = $row['email'];
            $contactList[$i]['phone'] = $row['phone'];
            $contactList[$i]['location'] = $row['location'];
            $contactList[$i]['work_time'] = $row['work_time'];
            $i++;
        }
        return $contactList;

    }

}
