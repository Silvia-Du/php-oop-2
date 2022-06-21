<?php

require_once __DIR__. '/Product.php';

class PetGame extends Product{

  private $materials;
  private $madeIn;
  private $disclimer;
 
  public function __construct($_name, $_price, $_brand, $_genre, $_materials , $_madeIn, $_disclimer){

    parent::__construct( $_name, $_price, $_brand, $_genre );

    $this->materials = $_materials;
    $this->madeIn = $_madeIn;
    $this->weight = $_disclimer;

  }

  //setter
  public function setMaterials($_materials){
    $this->materials = $_materials;
  }
  public function setMadeIn($_madeIn){
    $this->madeIn = $_madeIn;
  }
  public function setDisclimere($_disclimer){
    $this->disclimer = $_disclimer;
  }

  //getter

  public function getMaterials(){
    return $this->materials;
  }
  public function getMadeIn(){
    return $this->madeIn;
  }
  public function getDisclimere(){
    return $this->disclimer;
  }


}


?>