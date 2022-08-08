<?php

class Contact
{
    /**
     * return list of contact data
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