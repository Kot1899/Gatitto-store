<?php
echo  '<title>SESSION with registration</title>';
session_start();

try {
    $dsn= 'mysql:host=localhost;dbname=sign_in';
    $userCon='romanenko1';
    $passwordCon='123123';
    $dbh = new PDO($dsn,$userCon,$passwordCon);
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


//getting data from POST method
$login=$_POST['Login'];
$password=$_POST['Password'];

//checking new-data with bd-data
//$sql="insert into registration (login, password)
//    value ('$login', '$password')";
//$stm=$connection->query($sql);
//$stm->execute();

$sql="select * from registration where login='".$login."' and password='".$password."' ";
$stm=$connection->query($sql);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

/*
//hardcode
$loginMain='admin';
$passwordMain='admin';
if($loginMain==$login && $passwordMain==$password) {
    $list = 'account found';
}else{
    $list=null;
}
*/


if($list != null){
    $_SESSION['check']=true;
}else{
    $_SESSION['check']=false;
}
echo $_SESSION['check'];

//step to next page when TRUE
if($_SESSION['check']==true){
    header('location: goods.php');
   }

//step to next page when FALSE
if($_SESSION['check']==false){
    header('location: fault.php');
}