<?php


namespace App\Http\Services;


class PaymentService
{
    public function pay($amount){

      echo "Successfully Payment ".$amount;
    }
    public function add($firstNumber,$secondNumber){
        $a      =   $firstNumber;
        $b      =   $secondNumber;
        $sum    =   $a+$b;
        return $sum;
    }
    public function subtraction($firstNumber,$secondNumber){
        $a      =   $firstNumber;
        $b      =   $secondNumber;
        $sum    =   $a-$b;
        return $sum;
    }

}
