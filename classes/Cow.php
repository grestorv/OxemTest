<?php


class Cow extends Animal{

    public function __construct(Cart $cart)
    {
        $this->min=8;
        $this->max=12;
        $this->cart = $cart;
    }
    public function useAnimal(){

        $milk=mt_rand($this->min, $this->max);
        echo "The cow#".$this->id." gave ". $milk. " liters of milk.".PHP_EOL;
        $this->cart->addProducts($milk);
    }
}