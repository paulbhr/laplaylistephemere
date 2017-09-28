<?php

class User {
  private $id;
  private $login;
  private $password;
  private $mail;
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

  public function setMail($mail)
  {
      $this->mail = $mail;

      return $this;
  }
  public function getMail()
  {
      return $this->mail;
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
