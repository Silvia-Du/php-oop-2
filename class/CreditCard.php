<?php

trait CredtCard{
  private $cardExpiryDate;
  private $checkExpiry = false;
  private $cardNumber;



  
  public function setCardNumber($_cardNumber){
    if($this->checkExpiry){
      $this->cardNumber = $_cardNumber;
    }else{
      echo 'Carta non valida, selezionare un\'altro metodo di pagamento';
    }

  }

  
  public function setcardExpiry($_cardExpiryDate){


    $diff = date_diff( date_create($_cardExpiryDate) ,  date_create(date('Y-m-d')) );
    $differenza = (int) $diff->format("%R%a");

    if($differenza >0 ){
      $this->checkExpiry = true;
    }else{
      $this->checkExpiry = false;
    }
  }

  
  public function getCardNumber(){
    $this->cardNumber;
  }
}

?>