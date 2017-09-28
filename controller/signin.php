<?php
require 'logs.php';
require '../model/user.php';

$password = $_POST['password'];
$username = $_POST['username'];

// RETRIEVE USER ID IF FOUND
$input = $bdd->query("SELECT * FROM user WHERE login='$username' AND password='$password'")->fetch();

if($input == false) {
  echo 'Impossible de se connecter.';
}
else {
  $user = new User();
  $user->setId($input['id']);
  $user->setLogin($input['login']);
  $user->setPassword($input['password']);
  $user->setAdminstatus($input['adminstatus']);
  $user->setMail($input['mail']);

  $_SESSION['id'] = $user->getId();
  $_SESSION['login'] = $user->getLogin();
  $_SESSION['adminstatus'] = $user->getAdminstatus();
  header('location:../');
}
