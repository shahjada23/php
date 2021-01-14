<?php
class employee{

// Class Properties
public $name;
public $salary;

//Class method

// Constructor - It allows you to initialize objects
// function __construct(){
//     echo "Object Created.<br>";
//    }

//Constructor with arguments
function __construct($name, $salary){
           $this->name=$name;
           $this->salary=$salary;
}
}
$roy = new employee("Roy", 50000);
$Ali = new employee("Ali", 40000);

echo "Name :: $roy->name | Salary :: $roy->salary <br>";
echo "Name :: $Ali->name | Salary :: $Ali->salary ";

?>