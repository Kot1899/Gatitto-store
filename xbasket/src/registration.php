<?php

/**
 * @author Vitali Romanenko <vit.romanenko@gmail.com>
 * @param  $login
 * @param  $password
 * @param  $firstname
 * @param  $lastname
 * @param  $sex
 * @param  $age
 * @return void
 * description - writting data of new user to DB
 */

ini_set('display_errors',1);
error_reporting(E_ALL);

echo  '<title>Registration</title>';

try {
    $dsn= 'mysql:host=localhost;dbname=sign_in';
    $userCon='romanenko1';
    $passwordCon='123123';
    $dbh = new PDO($dsn,$userCon,$passwordCon);
//    foreach ($dbh->query('SELECT * from registration') as $row) {
//        print_r($row);
//    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

//connection to db
$dsn= 'mysql:host=localhost;dbname=sign_in';
$userCon='romanenko1';
$passwordCon='123123';
$connection= new PDO($dsn,$userCon,$passwordCon);

//getting data from form POST method
$login=$_POST['Login'];
$password=$_POST['Password'];
$name=$_POST['Name'];
$lastname=$_POST['Last_name'];
$sex=$_POST['Sex'];
$age= intval($_POST['Age']);


//  write data to bd user
try {
    $connection = new PDO($dsn, $userCon, $passwordCon);
    $sql_stat = "insert into registration (login, password, name, last_name, sex, age) 
                    values ('$login', '$password', '$name', '$lastname', '$sex', '$age')";
//                values (:login, :password, :name, :last_name, :sex, :age)";

    $stat = $connection->query($sql_stat);
//    $stat->bindParam(':login', $login);
//    $stat->bindParam(':password', $password);
//    $stat->bindParam(':name', $name);
//    $stat->bindParam(':last_name', $lastname);
//    $stat->bindParam(':sex', $sex);
//    $stat->bindParam(':age', $age);
    $stat->execute();

} catch (PDOException $e){
    echo $e->getMessage();
}

header('location: login.php');
