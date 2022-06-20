<?php

class User{
  private $name;
  private $surname;
  private $email;

  private $subscription = false;
  private $password;
  private $cardNumber;

  private $cardExpiryDate;
  private $checkExpiry = false;
  private $shippingAdress;

  private $ordersList =[];
  private $cartTot;
  private $discount = 0;

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


  public function setcardExpiry($_cardExpiryDate){

    // $cardExpiry = date_create($_cardExpiryDate);
    // $today = date_create(date('Y-m-d'));

    $diff = date_diff( date_create($_cardExpiryDate) ,  date_create(date('Y-m-d')) );
    $differenza = (int) $diff->format("%R%a");

    if($differenza >0 ){
      $this->checkExpiry = true;
    }else{
      $this->checkExpiry = false;
    }
  }

  public function setCardNumber($_cardNumber){
    if($this->checkExpiry){
      $this->cardNumber = $_cardNumber;
    }else{
      echo 'Carta non valida, selezionare un\'altro metodo di pagamento';
    }

  }
  //
  public function setOrderList($_ordersList){
    $this->ordersList = $_ordersList;
  }

  public function setShippingAdress($_shippingAdress){
    $this->shippingAdress = $_shippingAdress;
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

  public function getCardNumber(){
    $this->cardNumber;
  }
  //
  public function getOrderList(){
    $this->ordersList;
  }

  public function getShippingAdress(){
    $this->shippingAdress;
  }

}


$date1=date_create("2013-03-15");
$date2=date_create("2022-06-20");
$diff=date_diff($date1,$date2);
// echo $diff->format("%R%a");

$differenza = (int) $diff->format("%R%a");
// echo (int) $diff->format("%R%a");
// echo intval($diff->format("%R%a"));

echo $differenza;
if($differenza > 0){
  echo 'numero';
}else{
  echo 'stringa';
}
?>