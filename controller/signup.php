<?php
require 'logs.php';
require '../model/user.php';

$password = $_POST['password'];
$username = $_POST['username'];
$mail = $_POST['mail'];

// SIGNING UP
$sql = $bdd->query("INSERT INTO user (login, password, mail) VALUES ('$username', '$password', '$mail')");

if($sql) {
  // CREATING USER PLAYLIST
  $user = $bdd->query("SELECT id FROM user WHERE login='$username' AND password='$password'")->fetch();
  $songs = $bdd->query("SELECT id FROM song")->fetchAll();
  $userid = $user['id'];
  foreach($songs as $song) {
    $songid = $song['id'];
    $sql = $bdd->query("INSERT INTO user_song (user_id, song_id) VALUES ($userid, $songid)");
    }
  $_SESSION['id'] = $user['id'];
  echo 'Inscrition validée';
}
else {
  echo 'Inscription impossible, merci de choisir un autre identifiant.';
}; ?>

<script>
  setTimeout(function() {
    window.location.href = '../';
  }, 3000);
</script>
