<?php 
namespace App;
use App\Operands;
use App\SetOperand;
use App\OperandException;
class AdditionOperand extends SetOperand implements Operands{
    public function calculate(){
        return array_sum($this->params);
    }

}