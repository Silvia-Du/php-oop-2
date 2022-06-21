<?php

trait Address{
  private $street;
  private $street_number;
  private $city;
  private $country;
  private $postal_code;

  public function setStreetAndNum($_street){
    $this->street = $_street;
  }

  public function setStreetNum($_street_number){
    $this->street_number = $_street_number;
  }

  public function setCity($_city){
    $this->city = $_city;
  }

  public function setCountry($_country){
    $this->country = $_country;
  }

  public function setPostal_code($_postal_code){
    $this->postal_code = $_postal_code;
  }
  

  public function getFullAddress(){
    return "<ul>
              <li>Nome Prodotto: ". $this->street.' '. $this->street_number."</li>
              <li>Codice: ". $this->city ."</li>
              <li>Prezzo € ". $this->country ."</li>
              <li>Descrizione: ". $this->postal_code ."</li>
            </ul>";
  }

}


?>