<?php
  class User {
    private $username;
    private $email;
    private $password;
    private $hash;

    function __construct($username, $email, $password, $hash) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->hash = $hash;
    }

    public function setUsername($username) {
      $this->username = $username;
    }

    public function  getUsername() {
      return $this->username;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getEmail() {
      return $this->email;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function getPassword() {
      return $this->password;
    }
  }
?>
