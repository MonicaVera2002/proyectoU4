<?php

namespace App\Http\Controllers;

#Creacion de funcion de prueba
class OperationsController extends Controller
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

}
