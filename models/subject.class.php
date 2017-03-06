<?php 
 class Subject 
 {

  public $obsA = array();

  public function add(Observer $obs){
    
    array_push($this->obsA,$obs);

  }

  public function notify(){
   
    echo "fired <br>";


    foreach ($this->obsA as $obs1) {


      $obs1->update();
    }
  }


}