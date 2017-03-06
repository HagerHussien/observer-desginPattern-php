<?php

require_once("models/observer.class.php");

require_once("models/subject.class.php");

  
  echo "fire event <br>";

$Oobj=new Observer();

$Sobj=new Subject();

$Sobj->add($Oobj);

$Sobj->notify();
 

?>



