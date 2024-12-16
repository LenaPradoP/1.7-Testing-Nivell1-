<?php
use PHPUnit\Framework\TestCase;

require_once ("src/NumberChecker.php");

class NumberCheckerTest extends TestCase {

    public function testIsEven() {
        $number = new NumberChecker(4);
        $this->assertTrue($number->isEven());

        $number = new NumberChecker(5);
        $this->assertFalse($number->isEven());
    }

    public function testIsPositive() {
        $number = new NumberChecker(5);
        $this->assertTrue($number->isPositive());

        $number = new NumberChecker(-3);
        $this->assertFalse($number->isPositive());

        $number = new NumberChecker(0);
        $this->assertFalse($number->isPositive());
    }
}
?>
