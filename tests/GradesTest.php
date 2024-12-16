<?php 
use PHPUnit\Framework\TestCase;

require_once ("src/Grades.php");

class GradesTest extends TestCase {

    public function testFirstDivision()
    {
        $this->assertEquals('Primera Divisió', calculateGrade(75));
    }

    public function testSecondDivision()
    {
        $this->assertEquals('Segona Divisió', calculateGrade(50));
    }

    public function testThirdDivision()
    {
        $this->assertEquals('Tercera Divisió', calculateGrade(40));
    }

    public function testFail()
    {
        $this->assertEquals('Reprovat', calculateGrade(20));
    }

    public function testBoundaryValues()
    {
        $this->assertEquals('Primera Divisió', calculateGrade(60));
        $this->assertEquals('Segona Divisió', calculateGrade(45));
        $this->assertEquals('Tercera Divisió', calculateGrade(33));
        $this->assertEquals('Reprovat', calculateGrade(32));
    }


function calculateGrade($percentage)
{
    if ($percentage >= 60) {
        return 'Primera Divisió';
    } elseif ($percentage >= 45) {
        return 'Segona Divisió';
    } elseif ($percentage >= 33) {
        return 'Tercera Divisió';
    } else {
        return 'Reprovat';
    }
}

}
?>