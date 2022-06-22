<?php

class CreditCard{
  private $cardNumber;
  private $name;
  private $cvv;
  private $cardExpiry_Y;
  private $cardExpiry_m;
  private $isValidCard = true;

  //constructor

  public function __construct($_name, $_cardNumber, $_cardExpiry_Y, $_cardExpiry_m, $_cvv){

    $this->name = $_name;
    $this->cardNumber = $this->checkCardNumber($_cardNumber);
    $this->cardExpiry_Y = $_cardExpiry_Y;
    $this->cardExpiry_m = $_cardExpiry_m;
    $this->checkExpiry($_cardExpiry_Y, $_cardExpiry_m);
    $this->cvv = $this->checkCvv($_cvv);

  }


  //verifica del numero carta di credito
  public function checkCardNumber($_cardNumber){

    if( !is_numeric($_cardNumber) || strlen($_cardNumber) != 16 ){
      throw new Exception('Numero di carta errato');
    }else{
      $this->cardNumber = $_cardNumber;
    }

    return $_cardNumber;
  }

  //Verifica del CVV
  public function checkCvv($_cvv){
    echo $_cvv;
    echo explode('', $_cvv);
    echo str_repeat('0', 'A', $_cvv);

    // echo is_numeric($_cvv);

    // if(!is_numeric($_cvv) || strlen(str_replace('0', 'A', $_cvv)) !=3 ){
    //   throw new Exception('Numero CVV non valido');
    // }else{
    //   $this->cvv = $_cvv;
    // }

    // return $_cvv;
  }

  //verifica della data di scadenza
  public function checkExpiry($_cardExpiry_Y, $_cardExpiry_m){
  
    $today_y = date("Y");
    $today_m = date("n");

    if($today_y > $_cardExpiry_Y)
    {
      $this->isValidCard = false;
    }

    if($today_y == $_cardExpiry_Y){

      if($today_m > $_cardExpiry_m){
        $this->isValidCard = false;
      }
    }

    if(!$this->isValidCard ){
      throw new Exception('Carta di credito scaduta');
    }

  }

}

?>