<?php
class User {
  private $id;
  private $login;
  private $password;
  private $adminstatus;

  public function setId($id)
  {
      $this->id = $id;

      return $this;
  }
  public function getId()
  {
      return $this->id;
  }

  public function setLogin($login)
  {
      $this->login = $login;

      return $this;
  }
  public function getLogin()
  {
      return $this->login;
  }

  public function setPassword($password)
  {
      $this->password = $password;

      return $this;
  }
  public function getPassword()
  {
      return $this->password;
  }

  public function setAdminstatus($adminstatus)
  {
      $this->adminstatus = $adminstatus;

      return $this;
  }
  public function getAdminstatus()
  {
      return $this->adminstatus;
  }
}

try {
  $bdd = new PDO('mysql:host=localhost;dbname=laplaylist;charset=utf8', 'clubbkiki', 'clubbk1k1:)');
}
catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

$password = 'Coucou1$';
$login = 'paulbhr';
$input = $bdd->query("SELECT * FROM user WHERE login='$login' AND password='$password'")->fetch();

$user = new User();
$user->setId($input['id']);
$user->setLogin($input['login']);
$user->setPassword($input['password']);
$user->setAdminstatus($input['adminstatus']);
