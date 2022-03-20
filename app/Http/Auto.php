<?php

namespace App\Http;

class Auto
{
    public $Color;
    public $modelo;
    public $año;
    public $funcional;
    public $placa;


    function arrancar()
    {
        echo '<p>el automovil esta arrancando</p>';
    }

    function mostrar()
    {
        echo '<p>el color del auto es: ' . $this->Color . '</p>';
        echo '<p>el modelo del auto es: ' . $this->modelo . '</p>';
        echo '<p>el año del auto es: ' . $this->año . '</p>';
        if ($this->funcional) {
            echo '<p>el auto es funcional</p>';
        } else {
            echo '<p>el auto no funciona</p>';
        }

        echo '<hr>';
    }
}
