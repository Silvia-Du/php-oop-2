<?php

require_once __DIR__. '/User.php';
require_once __DIR__. '/../Adderess.php';
require_once __DIR__. '/../CreditCard.php';

 class Customer extends User{

  use Address;
  private $card;
  private $cart;

  public function setCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv){

    try{
      $this->card = new CredtCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv);
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }

  public function setCart(...$products){
    $this->cart = $products;
  }

 }


?>