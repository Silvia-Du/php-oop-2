<?php

require_once __DIR__.'/Adderess.php';

class Order{

  use Address;
  private $shippingAdress;
  private $discount = 0;
  private $name;
  private $surname;
  private $orderObjects = [];

  public function __construct(
    $_name, $_surname, $_discount, $_fullAddress, $_orderObjects){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->shippingAdress = $_fullAddress;
    $this->discount = $_discount;
    $this->orderObjects = $_orderObjects;
  }

  public function getOrder(){
    
    return "<ul>
              <li>Destinatario: ". $this->name.' '. $this->surname."</li>
              <li>Indirizzo di spedizione: ". $this->shippingAdress ."</li>
              <li>Sconto applicabile". $this->discount ."</li>
              <li>Oggetti acquistati: ". $this->orderObjects ."</li>
            </ul>";
  }

}

?>