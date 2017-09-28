<?php
require '../controller/logs.php';
require '../model/lifepoints.php';

$song_id = $_SESSION['currentid'];
$user_id = $_SESSION['id'];

if(isset($_POST['lifepoints'])) {
  $bonus = $_POST['lifepoints'];
} else {
  $bonus = 0;
}

updateLifepoints($user_id, $song_id, $bonus);
header('location:../');
