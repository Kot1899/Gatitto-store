<?php

//Regular expressions
//function preg_match, preg_replace

//found simple world
echo '-----'.'<br/>';

$string= 'some text about mvc';
$pattern= '*some*';  //must use some symbol, ex *
$result= preg_match($pattern, $string);   //return or 1 or 0!!!!!!!!!!!
echo $result.'<br/>';

//found integer and range(диапазон) of number
echo '-----'.'<br/>';

$string= 'some text about mvc and some integer 2005';
$pattern= '*2005*';
$pattern2= '*200[0-8]*'; //range
$pattern3= '*200[0,3,8,5]*'; //variants
$result= preg_match($pattern, $string);
$result2= preg_match($pattern2, $string);
$result3= preg_match($pattern3, $string);
echo $result.'<br/>';
echo $result2.'<br/>';
echo $result3.'<br/>';

//found difficult (квантификатор)
echo '-----'.'<br/>';

$string= 'apples and oranges';
$pattern= '*p{2}*'; //found symbol "p" which repeat 2 times -> a"PP"les
$result= preg_match($pattern, $string);
echo $result.'<br/>';

//found difficult (квантификатор)
echo '-----'.'<br/>';

$string= 'apples and oranges 444555 5555 6852';
$pattern= '*[0-5]+*'; //found any quantity of symbols in range 0-5
$result= preg_match($pattern, $string);
echo $result.'<br/>';