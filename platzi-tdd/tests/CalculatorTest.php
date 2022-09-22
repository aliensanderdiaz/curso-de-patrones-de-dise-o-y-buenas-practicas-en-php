<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAddWillReturnTheSumOfItsParams() {
        $sut = new Calculator();

        $this->assert_equals(8, $sut->add(6,2));
    }
}

?>