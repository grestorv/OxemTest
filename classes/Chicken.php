<?php


class Chicken extends Animal{
    public function __construct(Cart $cart)
    {
        $this->min=0;
        $this->max=1;
        $this->cart = $cart;
    }

    public function useAnimal(){
        $eggs=mt_rand($this->min, $this->max);
        echo "Chicken#".$this->id." laid ". $eggs. " eggs.".PHP_EOL;
        $this->cart->addProducts($eggs);
    }
}