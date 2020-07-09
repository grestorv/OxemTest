<?php


class Barn{
    public $animalsArr=[];//массив животных
    private $idCounter;//счетчик айди
    private $cart;//объект в котором хранится количество продуктов

    public function __construct()
    {
        $this->animalsArr=[];
        $this->idCounter = 0;
        $this->cart = new Cart();
    }

    private function addAnimal(Animal $animal){//добавление в список и установка айди животному
        $animal->setId($this->idCounter);
        $this->animalsArr[]=$animal;
        $this->idCounter++;
        return $this;
    }
    public function addCows($num){//создание и добавление в списрк коров
        for($i=0; $i<$num; $i++){
            $this->addAnimal(new Cow($this->cart));
        }
    }
    public function addChickens($num){//создание и добавление в список куриц
        for($i=0; $i<$num; $i++)
            $this->addAnimal(new Chicken($this->cart));
    }
    public function takeProducts(){//сбор продуктов с животных
        foreach ($this->animalsArr as $animal){
            $animal->useAnimal();
        }
    }
    public function getProductsCount(){//возвращает количестве собранных продуктов
        return $this->cart->getProductsCount();
    }

}