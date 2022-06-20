<?php

class Product{
  private $name;
  private $price;
  private $description;
  //so che il brand riguarderebbe una tabella a parte, quindi questo dato rappresenta l'id dell'azienda
  private $brand;
  private $genre;
  protected $discount = 0;

  public function __construct( $_name, $_price, $_brand, $_genre){
    $this->name = $_name;
    $this->price = $_price;
    $this->brand = $_brand;
    $this->genre = $_genre;

  }

  //set

  public function setName($_name){
    $this->name = $_name;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setBrand($_brand){
    $this->brand = $_brand;
  }

  public function setDescription($_description){
    $this->description = $_description;
  }

  public function setGenre($_genre){
    $this->genre = $_genre;
  }

  //get

  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getBrand(){
    return $this->brand;
  }

  public function getDescription(){
    return $this->description;
  }

  public function getGenre(){
    return $this->genre;
  }

}
?>