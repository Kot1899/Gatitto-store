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

//try {
//    $dsn= 'mysql:host=localhost;dbname=sign_in';
//    $userCon='romanenko1';
//    $passwordCon='123123';
//    $dbh = new PDO($dsn,$userCon,$passwordCon);
////    foreach ($dbh->query('SELECT * from registration') as $row) {
////        print_r($row);
////    }
//    $dbh = null;
//} catch (PDOException $e) {
//    print "Error!: " . $e->getMessage() . "<br/>";
//    die();
//}

//connection to db
$dsn= 'mysql:host=localhost;dbname=sign_in';
$userCon='romanenko1';
$passwordCon='123123';
$connection= new PDO($dsn,$userCon,$passwordCon);

//getting data from form POST method
$login=$_POST['Login'];
$password=$_POST['Password'];
$firstname=$_POST['Firstname'];
$lastname=$_POST['Last_name'];
$sex=$_POST['Sex'];
$age=$_POST['Age'];

//  write data to bd user
try {
    $connection = new PDO($dsn, $userCon, $passwordCon);
    $sql_stat = "insert into registration (login, password, firs_tname, last_name, sex, age)
                 values (:login, :password, :first_name, :last_name, :sex, :age)";
    $stat = $connection->prepare($sql_stat);
    $stat->bindParam(':login', $login);
    $stat->bindParam(':password', $password);
    $stat->bindParam(':first_name', $firstname);
    $stat->bindParam(':last_name', $lastname);
    $stat->bindParam(':sex', $sex);
    $stat->bindParam(':age', $age);
    $stat->execute();

    echo 'okkkk'."\n";
} catch (PDOException $e){
    $sql_stat =null;
    echo $sql_stat.$e->getMessage();
}


if ($connection->prepare($sql_stat)=== true){
    echo 'ok';
}else {
    echo 'problem';
}

//$sql="select * from registration";
//$stm=$connection->query($sql);
//$stm->execute();
//$list=$stm->fetchAll(2);

//header('location: login.php');
echo '<pre>';
//var_dump( $list);
//echo  $list;






/*

try{
$sql="insert into registration (login, password, first_name, last_name, sex, age)
    value ('$login', '$password', '$firstname', '$lastname', '$sex', '$age')";
$stm=$connection->query($sql);

$stm->execute();

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

echo 'he7';
header('location: login.php');


