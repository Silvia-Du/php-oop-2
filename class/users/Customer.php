<?php

require_once __DIR__. '/User.php';
require_once __DIR__. '/../CreditCard.php';
require_once __DIR__. '/../Adderess.php';
require_once __DIR__. '/../Order.php';

 class Customer extends User{

  use Address;
  private $card;
  protected $cart;
  private $order;
  private $subscription = true;



  public function __construct( $_name, $_surname, $_email){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->discount = $this->setDiscount();

  }

  public function setCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv){

    try{
      $this->card = new CreditCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv);

    }catch(Exception $e){
      echo 'errore : ' . $e->getMessage();
    }
  }

  
  public function setDiscount(){
    if($this->subscription){
      return 20;
    }else{
      return 0;
    }
  }

  public function setCart(...$products){
    $this->cart = $products;
  }
  public function getCart(){
    return $this->cart;
  }


  public function createOrder(){

    $this->order = new Order($this->name, $this->surname,$this->discount, $this->getFullAddress(),  $this->getCart());
  }

  public function getOrder(){
    return "
    <p>Nome destinatario: ". $this->name.' '. $this->surname."</p>
    <p>Sconto: ". $this->discount ."</p>
    <p>Indirizzo di spedizione". $this->getFullAddress() ."</p>
  ";
  }

 }


?>