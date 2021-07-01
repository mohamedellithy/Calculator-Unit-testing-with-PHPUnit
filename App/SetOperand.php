<?php 
namespace App;
use App\OperandException;
abstract class SetOperand{
    public $params;
    public function setParams(array $params){
        if(count($params) == 0) throw new OperandException;
        $this->params = $params;
    }
}