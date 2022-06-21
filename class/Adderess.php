<?php

trait Address{
  private $street;
  private $street_number;
  public $city;
  public $country;
  public $postal_code;



  public function setStreet($_street){
    $this->street = $_street;
  }

  public function setStreetNum($street_number){
    $this->street = $street_number;
  }

  public function getFullAddress(){
    return $this->street . ' ' . $this->street_number;
  }

  public function getStreet(){
    return $this->street;
  }
}


?>