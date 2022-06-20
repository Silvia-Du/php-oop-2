<?php

require_once __DIR__. '/Product.php';

class PetBed extends Product{

  private $size;
  private $madeIn;
  private $materials;
  public $instructions;
 


  public function __construct($_name, $_price, $_brand, $_genre, $_size, $_materials , $_madeIn){

    parent::__construct( $_name, $_price, $_brand, $_genre );

    $this->size = $_size;
    $this->materials = $_materials;
    $this->madeIn = $_madeIn;

  }

  //setter
  public function setSize($_size){
    $this->size = $_size;
  }
  public function setMaterials($_materials){
    $this->materials = $_materials;
  }
  public function setMadeIn($_madeIn){
    $this->madeIn = $_madeIn;
  }

  //getter
  public function getSize(){
    return $this->size;
  }
  public function getMaterials(){
    return $this->materials;
  }
  public function getMadeIn(){
    return $this->madeIn;
  }


}




?>