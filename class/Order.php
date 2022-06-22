<?php

require_once __DIR__.'/Adderess.php';

class Order{

  use Address;
  private $shippingAdress;
  private $discount = 0;
  private $name;
  private $surname;
  private $orderObjects = [];

  public function setOrder($_name, $_surname, $_discount, $_orderObjects){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->shippingAdress = $this->setShippingAdress();
    $this->discount = $_discount;
    $this->orderObjects = $this->setOrderObjects();
  }

  public function getOrder(){
    
    return "<ul>
              <li>Destinatario: ". $this->name.' '. $this->surname."</li>
              <li>Indirizzo di spedizione: ". $this->shippingAdress ."</li>
              <li>Sconto applicabile". $this->discount ."</li>
              <li>Oggetti acquistati: ". $this->orderObjects ."</li>
            </ul>";
  }

  public function setOrderObjects(...$_objects){
    $this->cart = $_objects;
  }

  public function setShippingAdress(){
    //qui non capisco come passare l'indirizzo dell'utente che diventerà lo stesso dell'ordine.
  }
 
}

$ordine1 = new Order('simone', 'giacomino', 20, 'calzini');

var_dump($ordine1);
?>