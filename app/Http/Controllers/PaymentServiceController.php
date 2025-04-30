<?php

namespace App\Http\Controllers;

use App\Http\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentServiceController extends Controller
{
    protected  $paymentService;

    public function __construct(PaymentService $paymentServiceObj){
        $this->paymentService = $paymentServiceObj;
    }
    public function makePayment(){
        $message = $this->paymentService->pay();
        return $message;
    }

    public function addNumber(){
        $num1   =  10;
        $numb2  =   20;
        $result =   $this->paymentService->add($num1,$numb2);
        return $result;
    }
    public function subtraction(){
        $a=10;$b= 20;
        $sub= $this->paymentService->subtraction($a,$b);
        return $sub;
    }
}
