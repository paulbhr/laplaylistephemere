<?php

//CHECKING PLAYER STATUS
if (!isset($_SESSION['n'])) {
  //LOADING FIRST TRACK
  $_SESSION['n'] = array_rand($usersongs, 1);
}
if (isset($_SESSION['autoplay'])) {
  $autoplay = $_SESSION['autoplay'];
}
else {
  //NO AUTOPLAY IF PLAY HAS NOT BEEN PUSHED
  $autoplay = 0;
}

//SELECTING SONG
$n = $_SESSION['n'];
$currentsong = $usersongs[$n];
$_SESSION['current'] = $currentsong["url"];
$_SESSION['currentid'] = $currentsong['id'];
