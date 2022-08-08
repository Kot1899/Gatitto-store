<?php

class UserController
{
    public function actionRegistration()
    {
        $login = '';
        $password = '';
        $firstname = '';
        $email = '';
        $sex = '';
        $age = '';
        $result = false;

           //getting data from form POST method
        if (isset($_POST['Submit'])) {
            $login = $_POST['Login'];
            $password = $_POST['Password'];
            $firstname = $_POST['Name'];
            $email = $_POST['Email'];
            $sex = $_POST['Sex'];
            $age = intval($_POST['Age']);
            $errors = array();

            //check by errors
            if (!User::checkPassword($password)) {
                    $errors[] = 'Incorrect password';
            }

            if (!User::checkFirstname($firstname)) {
                $errors[] = 'Incorrect name';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Incorrect email';
            }
            if (User::checkExistEmail($email)) {
                $errors[] = 'Such email already exists';
            }

            if (!User::checkSex($sex)) {
                $errors[] = 'Incorrect sex';
            }

            if (!User::checkAge($age)) {
                $errors[] = 'Incorrect age';
            }

            if ($errors == false) {
                $result = User::registration($login, $password, $firstname, $email, $sex, $age);
            }
        }
        require_once(ROOT . '/../app/views/user/registration.php');
        return true;
    }

    public function actionLogin()
    {
        $login = '';
        $password = '';

        //getting data from form POST method
        if (isset($_POST['Submit'])) {
            $login = $_POST['Login'];
            $password = $_POST['Password'];
            $errors = array();

            //check and validation
            if (!User::checkLogin($login)) {
                $errors[] = 'Incorrect login';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Incorrect password';
            }

            //check if user is registered
            $userId = User::checkData($login, $password);
            if ($userId == false) {
                $errors[] = 'Incorrect data';
            } else {
                User::auth($userId);
                header('location: /account');
            }
        }
        require_once(ROOT . '/../app/views/user/login.php');
        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION['user']);
        header('location: /main');
    }
}
