<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $num1 = $request->num1;
        $operador = $request->operador;
        $num2 = $request->num2;

        $resultado;
        
        if ($operador == "+")
            {$resultado = $num1 + $num2;}
        elseif ($operador == "-")
            {$resultado = $num1 - $num2;}
        elseif ($operador == "*")
            {$resultado = $num1 * $num2;}
        else 
            {$resultado = $num1 / $num2;}


        return view('calcular', compact('resultado'));
    }
}
