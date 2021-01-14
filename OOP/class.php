<?php
class player{

    //Property
    public $name;
    public $speed=3;

    //Method
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}

$player1 = new player();
$player1->set_name("Roy");
echo $player1->get_name() . "<br>";
echo $player1->speed . "<br>";

$player2 = new player();
$player2->set_name("Joy");
echo $player2->get_name();
?>