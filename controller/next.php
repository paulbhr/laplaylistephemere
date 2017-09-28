<?php
require '../controller/logs.php';
require '../model/lifepoints.php';

//UPDATING SONG'S LIFEPOINTS BEFORE LOADING NEXT ONE
if(isset($_POST['lastplayed'])) {
  $_SESSION['lastplayed'] = $_POST['lastplayed'];
  $bonus = $_POST['lifepoints'];
}
else {
  $_SESSION['lastplayed'] = $_SESSION['current'];
  $bonus = 0;
}
if(isset($_SESSION['id'])) {
  $user_id = $_SESSION['id'];
  $song_id = $_SESSION['currentid'];
  updateLifepoints($user_id, $song_id, $bonus);
}

//CREATING HISTORY ARRAY
if (!isset($_SESSION['played'])) {
  $_SESSION['played'] = array();
}

//ADDING SONG TO HISTORY
$key = array_search($_SESSION['current'], $_SESSION['played']);
if($key===FALSE) {
  array_push($_SESSION['played'], $_SESSION['current']);
}

//CHECKING IF ALL TRACKS HAVE BEEN PLAYED ONCE
if(count($_SESSION['played']) >= count($usersongs)) {
  $_SESSION['played'] = array();
}

//SHUFFLING PLAYLIST AND SELECTING SONG
$next = array_rand($usersongs, 1);

//CHECKING IF SONG HAS ALREADY BEEN PLAYED
if($usersongs[$next]['url'] !== $_SESSION['lastplayed'] && in_array($usersongs[$next]['url'], $_SESSION['played']) == false) {
  $_SESSION['n'] = $next;
  $_SESSION['autoplay'] = 1;
  header('location:../');
}
else {
  //SELECTING ANOTHER SONG
  header('location:./next.php');
}
