<?php
session_start();
//LOGIN ET MDP POUR CONNEXION A LA BDD
require 'config.php';

//CONNEXION A LA BDD
try {
  $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $admin, $pass);
}
catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

//LOADING USER'S PLAYLIST
if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $usersongs = $bdd->query("SELECT * FROM song INNER JOIN user_song ON user_song.song_id = song.id WHERE user_song.user_id = $id AND user_song.lifepoints > 0")->fetchAll();
}
else {
  $usersongs = $bdd->query("SELECT * FROM song")->fetchAll();
}

//GLOBAL PLAYLIST ACCESS
$songs = $bdd->query("SELECT * FROM song")->fetchAll();
