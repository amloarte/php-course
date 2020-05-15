<?php 

    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];
    
    // $suma = $num1 + $num2;
    // $resta = $num1 - $num2;
    // $multi = $num1 * $num2;
    // $divi = $num1 / $num2;

    // echo "SUMA: ". $suma."<br>";
    // echo "RESTA: ". $resta."<br>";
    // echo "MULTIPLICACIÓN: ". $multi."<br>";
    // echo "DIVISIÓN: ". $divi."<br>";

    $fecha = $_POST["fecha"];
    $actual = date("Y");
    $edad =  $actual - $fecha;
    echo $edad;
   

    
?>