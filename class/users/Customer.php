<?php

require_once __DIR__. '/User.php';
require_once __DIR__. '/../Order.php';
require_once __DIR__. '/../Adderess.php';
require_once __DIR__. '/../Order.php';

 class Customer extends User{

  use Address;
  private $card;
  private $cart;
  private $order;

  public function setCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv){

    try{
      $this->card = new CreditCard($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv);
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }

  public function setCart(...$products){
    $this->cart = $products;
  }

  // private function setOrder(){

  //   $this->order = new Order($_name, $_surname, $_shippingAdress, $_discount, $_orderObjects);
  // }

 }


?>