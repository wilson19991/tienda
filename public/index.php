<?php

require __DIR__ . '/../vendor/autoload.php';

// instanciar

$miAuto = new App\Http\Auto;
$tuAuto = new \App\Http\Auto;
$suAuto = new \App\Http\Auto;

// asignando

$miAuto->Color = "blanco";
$miAuto->modelo = "camioneta";
$miAuto->año = 1999;
$miAuto->funcional = false;

$tuAuto->Color = "rojo";
$tuAuto->modelo = "automovil";
$tuAuto->año = 2022;
$tuAuto->funcional = true;

// llamar funciones

$miAuto->mostrar();
$tuAuto->mostrar();
$suAuto->mostrar();