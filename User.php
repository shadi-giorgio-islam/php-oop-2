<?php

class User{
  public $nome;
  public $cognome;
  public $dataNascita;
  public $descrizione;
  public function __construct($_nome = '', $_cognome = ''){
      $this->nome = $_nome;
      $this->cognome = $_cognome;
  }
  public function checkEta($_eta){
    if(!is_numeric($_eta) || $_eta <0 || $_eta > 120){
      throw new Exception('età inserita non valida');
    } else {
      $this->dataNascita = 2021 - $_eta;
    }
  }
}
