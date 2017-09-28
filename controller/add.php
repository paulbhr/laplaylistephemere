<?php
require '../controller/logs.php';
require '../model/crud.php';

$title = $_POST['title'];
$title = str_replace ("'","''", $title);
$artist = $_POST['artist'];
$time = $_POST['time'];
$bpm = $_POST['bpm'];
$url = $_POST['url'];

Song::addSong($title, $artist, $time, $bpm, $url);
header('location:../');
