<?php

// check attach file
$checkInclude = ROOT.'/../app/models/Contact.php';
    if(file_exists($checkInclude))
    {
        include_once ($checkInclude);
      }else
    {
        echo '<br>'.'Vitali, file with modelAbout was 
        not found and do not include'.'<br>';
    }

/**
 * return data about news
 */
class ContactController
{
    /**
     * return data about news
     * @param $contactList
     */
    public function actionContact()
    {
        $contactList=array();
        $contactList= Contact::getContactList();

        require_once (ROOT.'/../app/views/contact/index.php');

        return true;
    }
}
