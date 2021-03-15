<?php
require_once 'User.php';
require_once 'Registered.php';
// prima istanza
$user1 = new User('Valentino','Rossi');
try {
  $user1->checkEta(22);
} catch(Exception $e){
  echo $e->getMessage();
}
$user1->descrizione = 'ciao';
var_dump($user1);

// secondo istanza
$user2 = new Registered('Mario','Bianchi','ciao@libro.it','1234');
try {
  $user2->checkEta(35);
} catch(Exception $e){
  echo $e->getMessage();
}
$user2->descrizione = 'Benvenuto';
var_dump($user2);
