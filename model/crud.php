<?php
class Song {
  function addSong($title, $artist, $time, $bpm, $url) {
    global $bdd;
    //ADDING SONG TO DB
    $sql = $bdd->query("INSERT INTO song (title, artist, time, bpm, url) VALUES ('$title', '$artist', $time, '$bpm', '$url')");

    // UPDATNG USER PLAYLIST WITH NEW SONG
    $users = $bdd->query("SELECT id FROM user")->fetchAll();
    $update = $bdd->query("SELECT id FROM song WHERE url='$url'")->fetch();
    $songid = $update['id'];

    foreach($users as $user) {
      $userid = $user['id'];
      $sql = $bdd->query("INSERT INTO user_song (user_id, song_id) VALUES ('$userid', '$songid')");
    }
  }

  function deleteSong($id) {
    global $bdd;
    //DELETING SONG FROM USERS' PLAYLIST
    $sql = $bdd->query("DELETE FROM user_song WHERE song_id=$id");

    //DELETING SONG FROM DB
    $sql = $bdd->query("DELETE FROM song WHERE id=$id");
  }

  function editSong($songid, $title, $artist, $time, $bpm, $url) {
    global $bbd;
    $sql = $bdd->query("UPDATE song SET title='$title', artist='$artist', time='$time', bpm='$bpm', url='$url' WHERE id='$songid'");
  }
}
