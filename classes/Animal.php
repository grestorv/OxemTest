<?php


abstract class Animal{
    protected $min;//минимальное количество продукции, выдываемое животным
    protected $max;//максимальное количество продукции, выдаваемое животным
    protected $id;//айди животного
    protected $cart;// инъецируемый объект корзины, которую животное будет пополнять
    abstract function useAnimal();//создает продукты и кладет их в корзину
    public function setId($id){//устанавливает айди животному
        $this->id=$id;
    }
}