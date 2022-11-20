<?php

//
// @author: Kaleb Eberhart
// @class: Bicycle
// @language: PHP
// @date: 2022/11/20
// @purpose: This class was created as a coding exercise
//

class Bicycle {

    //variables used in this class
    private $color;
    private $brand;
    private $momentum;
    private $direction;

    function __construct($color, $brand, $momentum, $direction){
        $this->color = $color;
        $this->brand = $brand;
        $this->momentum = $momentum;
        $this->direction = $direction;
    }

    //Start getters and setters
    function get_color(){
        return $this->color;
    }
    
    function set_color($color){
        $this->color = $color;
    }

    function get_brand(){
        return $this->brand;
    }

    function set_brand($brand){
        $this->brand = $brand;
    }

    function get_momentum(){
        return $this->momentum;
    }

    function set_momentum($momentum){
        $this->momentum = $momentum;
    }

    function get_direction(){
        return $this->direction;
    }

    function set_direction($direction){
        $this->direction = $direction;
    }
    //End getters and setters

    //Basic methods for movement
    function move_forward(){
        $this->momentum = "Forward";
        echo "The bike is now moving forward";
    }

    function brake(){
        $this->momentum = "Stopped";
        echo "The bike slows to a stop";
    }

    function turn($dir){
        $this->direction = $dir;
        echo "The bike turns " . $dir;
    }
}

//Instantiate a bicycle
$bike = new Bicycle("Black", "Mongoose", "Stopped", "Forward");

//Basic calling of functions in the bicycle class
$bike->move_forward();
$bike->turn("Left");
$bike->turn("Straight");
$bike->brake();
?>