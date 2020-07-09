<?php


class Cart{
    private $productsCount;//количество продуктов в корзине
    public function __construct()
    {
        $this->productsCount=0;
    }
    public function addProducts($count){//увеличивает общее число продуктов
        $this->productsCount+=$count;
    }
    public function getProductsCount(){//метод возвращающий количество продуктов в корзине
        return $this->productsCount;
    }
}