<?php 
declare(strict_types = 1);

$Grade = 78;

echo calculateGrade($Grade);

function calculateGrade(int $Grade) : string {
    $Answer = '';

    if ($Grade >= 60) {
        $Answer = 'El alumno está en Primera División.' .PHP_EOL;
    } elseif ( $Grade >= 45) {
        $Answer = 'El alumno está en Segunda División.' .PHP_EOL;
    } elseif ( $Grade >= 33) {
        $Answer = 'El alumno está en Tercera División.' .PHP_EOL;
    } else {
        $Answer = 'El alumno ha suspendido.' .PHP_EOL;
    }
        return $Answer;
    }

?>