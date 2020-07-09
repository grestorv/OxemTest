<?php
    //регистрируем автозагрузчик классов
    spl_autoload_register(function ($class_name) {
        include "classes/$class_name.php";
    });

    $barn=new Barn();//создаем систему сбора продукции
    $barn->addChickens(20);//добавляем куриц
    $barn->addCows(10);//добавляем коров
    $barn->takeProducts();//собираем продукты
    echo "Number of products: ".$barn->getProductsCount();//выводим число собранных продуктов