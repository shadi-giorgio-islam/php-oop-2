<?php
require_once 'User.php';
require_once 'GetEmail.php';

class Registered extends User{
  use GetEmail;
  function __construct($_nome = '', $_cognome = '', $_email, $_password){
    parent::__construct($_nome,$_cognome);
    $this->email = $_email;
    $this->password = $_password;
  }
}
