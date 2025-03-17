<?php 
    function sum(int $a, int $b) {
        return $a + $b;
    }

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo sum($num1, $num2);
    echo "\n";
    echo "<a href=form2.html>Do another sum!</a>";
?>