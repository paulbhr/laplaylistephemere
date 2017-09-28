<?php
require '../controller/logs.php';
require '../model/crud.php';

$songid = $_POST['id'];

Song::deleteSong($songid);
header('location:../');
