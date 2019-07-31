<?php


class QuadraticEqution
{
    public $a;
    public $b;
    public $c;

    public function __construct($value_a,$value_b,$value_c){
        $this->a = $value_a;
        $this->b = $value_b;
        $this->c = $value_c;
    }

    public  function get_value_a (){
        return $this->a;
    }
    public  function get_value_b (){
        return $this->b;
    }
    public  function get_value_c (){
        return $this->c;
    }

    public function get_discriminant(){
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function get_root (){
        return (-$this->b) / (2 * $this->a);
    }

    public function get_root_1(){
        return ((-$this->b + pow($this->get_discriminant(),0.5)) / (2 * $this->a * $this->c));
    }

    public function get_root_2()
    {
        return ((-$this->b - pow($this->get_discriminant(), 0.5)) / (2 * $this->a * $this->c));
    }
}