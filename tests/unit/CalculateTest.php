<?php
class CalculateTest extends \PHPUnit\Framework\TestCase{
    /**
     * @test 
     */
    public function AdditionOperation(){
        $operation = new App\AdditionOperand();
        $operation->setParams([2,3]);
        $this->assertEquals(5,$operation->calculate());
    }

    public function testMultipleOperation(){
        $operation = new App\MultipleOperand();
        $operation->setParams([8,2]);
        $this->assertEquals(16,$operation->calculate());
    }

    public function testSubtractOperation(){
        $operation = new App\SubtractOperand();
        $operation->setParams([8,2]);
        $this->assertEquals(6,$operation->calculate());
    }


    public function testDevisionOperation(){
        $operation = new App\DevisionOperand();
        $operation->setParams([8,2]);
        $this->assertEquals(4,$operation->calculate());
    }

    public function testDevisionOnZero(){
        $this->expectException(App\OperandException::class);
        $operation = new App\DevisionOperand();
        $operation->setParams([8,0]);
        $operation->calculate();
    }

    public function testEmptyOperand(){
        $this->expectException(App\OperandException::class);
        
        $operation = new App\AdditionOperand();
        $operation->setParams([]);
        $operation->calculate();

        $operation = new App\MultipleOperand();
        $operation->setParams([]);
        $operation->calculate();


        $operation = new App\SubtractOperand();
        $operation->setParams([]);
        $operation->calculate();


        $operation = new App\DevisionOperand();
        $operation->setParams([]);
        $operation->calculate();
    }
}