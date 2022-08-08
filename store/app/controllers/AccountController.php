<?php

/**
 * return data about users account
 */
class AccountController
{
    public function actionIndex()
    {
        //get Id of user
        $userId = User::checkAccount();

        //get all data about user which sign in
        $user = User::getUserById($userId);

        require_once(ROOT . '/../app/views/account/index.php');
        return true;
    }
}
