<?php

/**
 * return data about сontacts of store
 */
class ContactController
{
    /**
     * return data about сontacts of store
     */
    public function actionContact(): void
    {
        $contactList = Contact::getContactList();
        require_once(ROOT . '/../app/views/contact/index.php');
    }
}
