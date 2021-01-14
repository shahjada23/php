<?php
class employee{

// Class Properties
public $name;
public $salary;

//Constructor with arguments
  function __construct($name, $salary){
           $this->name=$name;
           $this->salary=$salary;
  }


  //Distroy Object
  function  __destruct(){
      echo "Distroying $this->name <br>";
  }
}
$roy = new employee("Roy", 50000);
$Ali = new employee("Ali", 50000);
$Pai = new employee("Pai", 50000);

echo "Name :: $roy->name | Salary :: $roy->salary <br>";


?>