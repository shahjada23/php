<?php

    class Employee{

        public $name = "harry";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is 
            $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheritance

    class Programmer extends Employee{
           private $language="PHP";

           function change_language($language){
               $this->language=$language;
           }
    }


    $roy = new Employee();
    $roy->getSalary();
    $roy->showName();

    $geeta = new Programmer();
    $geeta->name="Geeta";
    echo $geeta->change_language("Python");
    $geeta->showName();

?>