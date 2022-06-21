<?php


class User{
  
  private $name;
  private $surname;
  private $email;

  private $subscription = false;
  private $password;
  protected $discount;

  private $ordersList =[];

  public function __construct( $_name, $_surname, $_email ){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->discount = $this->setDiscount();

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

  public function setSubscription($_subscription, $_password){

    if(strlen($_password) > 8 && $_subscription == true)
    $this->password = $_password;
    $this->subscription = $_subscription;

  }


  private function setDiscount(){
    if($this->subscription){
      return 20;
    }else{
      return 0;
    }
  }
  
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