<?php

require_once __DIR__. '/Product.php';

class PetFood extends Product{

  private $ingredients;
  public $ageRange;
  private $weight;
  private $usage;
  public $description;
  public $expirDate;
  private $whatAnimals;


  public function __construct($_name, $_price, $_brand, $_genre, $_ingredients, $_ageRange, $_weight, $_description, $_expirDate ){

    parent::__construct( $_name, $_price, $_brand, $_genre);

    $this->ingredients = $_ingredients;
    $this->ageRange = $_ageRange;
    $this->weight = $_weight;
    $this->description = $_description;
    $this->expirDate = $_expirDate;

  }

  //setter
  public function setIngredients($_ingredients){
    $this->ingredients = $_ingredients;
  }
  public function setWeight($_weight){
    $this->weight = $_weight;
  }
  public function setUsage($_usage){
    $this->usage = $_usage;
  }
  public function setWhatAnimals($_whatAnimals){
    $this->whatAnimals = $_whatAnimals;
  }

  //getter

  public function getIngredients(){
    return $this->ingredients;
  }
  public function getWeight(){
    return $this->weight;
  }
  public function getUsage(){
    return $this->usage;
  }
  public function getWhatAnimals(){
    return $this->whatAnimals;
  }


}


?>