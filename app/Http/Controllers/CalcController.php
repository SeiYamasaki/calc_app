<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnSelf;
class CalcController extends Controller
{
    public function calcs($operator, $number1, $number2)
    {
        if ($operator == "addition") {
            $result = $number1 + $number2;
        } elseif ($operator == "subtraction") {
            $result = $number1 - $number2;
        } elseif ($operator == "multiplication") {
            $result = $number1 * $number2;
        } elseif ($operator == "division") {
            $result = $number1 / $number2;
        } else {
            echo  "演算子が不明のため計算不能";
        }
        return view("message.calcs", ["result" => $result]);
    }
}
