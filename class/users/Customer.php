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

  public function setCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv){

    try{
      $this->card = new CreditCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv);

    }catch(Exception $e){
      echo 'errore : ' . $e->getMessage();
    }
  }

  public function setCart(...$products){
    $this->cart = $products;
  }

  public function createOrder(){

    $this->order = new Order($this->name, $this->surname,$this->discount, $this->getFullAddress(),  $this->cart);
  }

 }


?>