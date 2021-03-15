<?php
require_once 'User.php';
// prima istanza
$user1 = new User('Mario','Rossi');
try {
  $user1->checkEta(22);
} catch(Exception $e){
  echo $e->getMessage();
}
$user1->descrizione = 'ciao';
var_dump($user1);
