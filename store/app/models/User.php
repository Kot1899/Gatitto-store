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

class User
{
    /**
     * registration new user
     * @param $login
     * @param $password
     * @param $firstname
     * @param $email
     * @param $sex
     * @param $age
     * @return bool
     */
    public static function registration($login, $password, $firstname, $email, $sex, $age)
    {
        //request to DB
        $connection= DataBase::getConnection();

        $stm='insert into registration (login, password, name, email, sex, age) 
                values (:login, :password, :firstname, :email, :sex, :age)';
        $result = $connection->prepare($stm);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':sex', $sex, PDO::PARAM_STR);
        $result->bindParam(':age', $age, PDO::PARAM_STR);

        return $result-> execute();

    }

    /**
     * CHECK that login was more 6 symbols
     */
    public static function checkLogin($login)
    {
        if(strlen($login)>=5)
        {
            return true;
        }
        return false;
    }

    /**
     * CHECK that password was more 6 symbols
     */
        public static function checkPassword($password)
    {
        if(strlen($password)>=5)
            {
                return true;
            }
    return false;
    }
    /**
     * CHECK that firstname was more 3 symbols and is string type
     */
    public static function checkFirstname($firstname)
    {
        if(strlen($firstname)>=3 && is_string($firstname))
        {
            return true;
        }
        return false;
    }
    /**
     * CHECK that email is email
     */
    public static function checkEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        return false;
    }
    /**
     * CHECK that email is new
     */
    public static function checkExistEmail($email)
    {
        //request to DB
        $connection= DataBase::getConnection();

        $stm='select count(*) from registration where email= :email';
        $result = $connection->prepare($stm);
        $result->bindParam(':email', $email, 2);
        $result-> execute();

        if($result->fetchColumn())
            return true;
        return false;
    }
    /**
     * CHECK that sex was male or female
     */
    public static function checkSex($sex)
    {
        if($sex=='male' || $sex=='female')
        {
            return true;
        }
        return false;
    }
    /**
     * CHECK that age range 0-99 and is integer type
     */
    public static function checkAge($age)
    {
        if( $age>0 && $age<99 && is_integer($age))
        {
            return true;
        }
        return false;
    }
    /**
     * CHECK data for login
     */
    public static function checkData($login, $password)
    {
            //request to DB
            $connection= DataBase::getConnection();

            $stm='select * from registration where login=:login and password=:password';
            $result = $connection->prepare($stm);
            $result->bindParam(':login', $login, PDO::PARAM_STR);
            $result->bindParam(':password', $password, PDO::PARAM_STR);

            $result-> execute();
            $user=$result->fetch();
            if($user)
                {
                 return $user['id'];
                }
            return false;
    }
    /**
     * save Id new user
     */
    public static function auth($userId)
    {
        $_SESSION['user']=$userId;
    }

    /**
     * check account
     */
    public static function checkAccount()
    {
        if(isset ($_SESSION['user']))
        {
            return $_SESSION['user'];
        }
        header('location: /user/login');
    }

    /**
     * check account
     */
    public static function newUser()
    {
        if(isset ($_SESSION['user']))
        {
            return false;
        }
        return true;
    }

    /**
     * C
     */
    public static function getUserById($id)
    {
        if($id) {
            //request to DB
            $connection = DataBase::getConnection();

            $stm = 'select * from registration where id=:id';
            $result = $connection->prepare($stm);
            $result->bindParam(':id', $id, 1);

            $result->setFetchMode(2);
            $result->execute();

            return $result->fetch();
        }
    }
}