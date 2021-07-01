<?php 
namespace App;
use App\Operands;
use App\OperandException;
class DevisionOperand extends SetOperand implements Operands{
    public function calculate(){
        return array_reduce($this->params, function($element1, $element2){
            if($element1 == 0) return $element2;
            if($element2 == 0) throw new OperandException;
            return $element1 / $element2;
        }, "0");
    }

}