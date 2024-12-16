<?php 
use PHPUnit\Framework\TestCase;

require_once ("src/Grades.php");

class GradesTest extends TestCase {

    public function testFirstDivision()
    {
        $this->assertEquals('El alumno está en Primera División.' .PHP_EOL, calculateGrade(75));
    }

    public function testSecondDivision()
    {
        $this->assertEquals('El alumno está en Segunda División.' .PHP_EOL, calculateGrade(50));
    }

    public function testThirdDivision()
    {
        $this->assertEquals('El alumno está en Tercera División.' .PHP_EOL, calculateGrade(40));
    }

    public function testFail()
    {
        $this->assertEquals('El alumno ha suspendido.' .PHP_EOL, calculateGrade(20));
    }

    public function testBoundaryValues()
    {
        $this->assertEquals('El alumno está en Primera División.' .PHP_EOL, calculateGrade(60));
        $this->assertEquals('El alumno está en Segunda División.' .PHP_EOL, calculateGrade(45));
        $this->assertEquals('El alumno está en Tercera División.' .PHP_EOL, calculateGrade(33));
        $this->assertEquals('El alumno ha suspendido.' .PHP_EOL, calculateGrade(32));
    }

}

?>