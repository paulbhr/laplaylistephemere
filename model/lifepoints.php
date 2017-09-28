<?php

function updateLifepoints($user_id, $song_id, $bonus) {
  global $bdd;
  $sql = $bdd->query("SELECT lifepoints FROM user_song WHERE id=$song_id")->fetch();
  $lifepoints = $sql['lifepoints'];

  //UPDATE NUMBER
  $lifepoints += $bonus;

  //UPDATE DB
  $update = $bdd->query("UPDATE user_song SET lifepoints=$lifepoints WHERE user_id=$user_id AND id=$song_id");
}
