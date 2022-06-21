<?php

require_once __DIR__. '/../Adderess.php';
require_once __DIR__. '/../CreditCard.php';

class User{

  use Address;
  use CredtCard;
  private $name;
  private $surname;
  private $email;

  private $subscription = false;
  private $password;

  private $ordersList =[];

  public function __construct( $_name, $_surname, $_email ){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;

  }

  //set

  public function setName($_name){
    $this->name = $_name;
  }
  public function setSurname($_surname){
    $this->surname = $_surname;
  }

  public function setEmail($_email){
    $this->email = $_email;
  }

  public function setSubscription($_subscription){

    if($this->password != null){
      $this->subscription = $_subscription;
    }
  }

  public function setPword($_password){

    if(strlen($_password) > 8 )
    $this->password = $_password;
  }


  //
  public function setOrderList($_ordersList){
    $this->ordersList = $_ordersList;
  }

  //get

  public function getName(){
    $this->name;
  }
  public function getSurname(){
    $this->surname;
  }

  public function getEmail(){
    $this->email;
  }

  //
  public function getOrderList(){
    $this->ordersList;
  }

}

?>