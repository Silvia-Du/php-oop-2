<?php

trait Address{
  private $street;
  private $street_number;
  private $city;
  private $country;
  private $postal_code;

  public function setFullAddress($_street, $_street_number, $_city, $_country, $_postal_code){
    $this->street = $_street;
    $this->street_number = $_street_number;
    $this->city = $_city;
    $this->country = $_country;
    $this->postal_code = $_postal_code;
  }
  
  public function getFullAddress(){
    return "
              <p>Via: ". $this->street.' '. $this->street_number."</p>
              <p>Città: ". $this->city ."</p>
              <p>Paese:". $this->country ."</p>
              <p>Codice postale: ". $this->postal_code ."</p>
            ";
  }

}


?>