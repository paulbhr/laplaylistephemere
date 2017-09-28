<?php
require '../controller/logs.php';
require '../model/lifepoints.php';

//CREATING HISTORY ARRAY
//
//test 1 : $_SESSION['played'] is set
if (!isset($_SESSION['played'])) {
  $_SESSION['played'] = array();
}
$_SESSION['played'] = array(1, 2, 3);
echo 'Expected array(1, 2, 3)<br>';
var_dump($_SESSION['played']);
echo '<br>';

//test 2 : $_SESSION['played'] is not set
unset($_SESSION['played']);
if (!isset($_SESSION['played'])) {
  $_SESSION['played'] = array();
}
echo 'Expected array()<br>';
var_dump($_SESSION['played']);
echo '<br>';

//ADDING SONG TO HISTORY
//
//test 1 : $key is true
$_SESSION['current'] = 'foo';
$_SESSION['played'] = array(1, 'foo', 2, 3);
$key = array_search($_SESSION['current'], $_SESSION['played']);
if($key===FALSE) {
  array_push($_SESSION['played'], $_SESSION['current']);
}
echo 'Expected array(1, "foo", 2, 3) <br>';
var_dump($_SESSION['played']);
echo '<br>';

//test 2 : $key is false
$_SESSION['played'] = array(1, 2, 3);
$key = array_search($_SESSION['current'], $_SESSION['played']);
if($key===FALSE) {
  array_push($_SESSION['played'], $_SESSION['current']);
}
echo 'Expected array(1, 2, 3, "foo") <br>';
var_dump($_SESSION['played']);
echo '<br>';


//CHECKING IF ALL TRACKS HAVE BEEN PLAYED ONCE
//
//test 1 : a = b
$_SESSION['played'] = array(1, 2, 3);
$usersongs = array(1, 2, 3);
if(count($_SESSION['played']) >= count($usersongs)) {
  $_SESSION['played'] = array();
}
echo 'Expected array() <br>';
var_dump($_SESSION['played']);
echo '<br>';

//test 2 : a < b
$_SESSION['played'] = array(1, 2);
$usersongs = array(1, 2, 3, 4);
if(count($_SESSION['played']) >= count($usersongs)) {
  $_SESSION['played'] = array();
}
echo 'Expected array(1, 2) <br>';
var_dump($_SESSION['played']);
echo '<br>';

//test 3 : a > b
$_SESSION['played'] = array(1, 2, 3, 4);
$usersongs = array(1, 2, 3);
if(count($_SESSION['played']) >= count($usersongs)) {
  $_SESSION['played'] = array();
}
echo 'Expected array() <br>';
var_dump($_SESSION['played']);
echo '<br>';
