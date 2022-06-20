<?php

class User{
  private $name;
  private $surname;
  private $phoneNum;
  private $paymentMethods;
  private $cardNumber;
  private $cardExpiryDate;
  private $ordersList =[];
  private $cartTot;
  private $shippingAdress;
  private $discount = 0;

  public function __construct( $_name, $_surname, $_phoneNum, $_paymentMethods, $_cardNumber, $_ordersList, $_shippingAdress){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->phoneNum = $_phoneNum;
    $this->paymentMethods = $_paymentMethods;
    $this->cardNumber = $_cardNumber;
    $this->ordersList = $_ordersList;
    $this->shippingAdress = $_shippingAdress;

  }

  //set

  public function setName($_name){
    $this->name = $_name;
  }
  public function setSurname($_surname){
    $this->surname = $_surname;
  }

  public function setPhoneNum($_phoneNum){
    $this->phoneNum = $_phoneNum;
  }

  public function setPaymentMethods($_paymentMethods){
    $this->paymentMethods = $_paymentMethods;
  }

  public function setCardNumber($_cardNumber){
    $this->cardNumber = $_cardNumber;
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

  public function getPhoneNum(){
    $this->phoneNum;
  }

  public function getPaymentMethods(){
    $this->paymentMethods;
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
?>