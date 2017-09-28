<?php
require '../controller/logs.php';
require '../model/crud.php';

$songid = $_POST['id'];
$title = $_POST['title'];
$artist = $_POST['artist'];
$time = $_POST['time'];
$bpm = $_POST['bpm'];
$url = $_POST['url'];

Song::editSong($songid, $title, $artist, $time, $bpm, $url);
header('location:../');
