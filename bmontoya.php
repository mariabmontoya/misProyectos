<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php

//ejercicio 1
echo "<h3>Ejercicio 01</h3>";
    $num1 = 10;
    $num2 = 30;

    if($num1 > $num2){
        echo "El numero mayor es ".$num1;
    }else{
        echo "El numero mayor es ".$num2;
    }
echo "<br />";
echo "<br />";

//ejercicio 2
echo "<h3>Ejercicio 02 y 03</h3>";
    $random = rand(1, 5);

    if($random == 3 || $random == 5){
        echo $random."<br />";
    }
    if($random == 3){
       echo $random."<br />";
    }else{
        echo "el numero NO es 3"."<br />";
    }

echo "<br />";
echo "<br />";
//ejercicio 4
echo "<h3>Ejercicio 04</h3>";
    $random1 = rand(1, 100);

    if($random1 > 50){
        echo "El​ ​ número​ ​ es​ ​ mayor​ ​ a ​ ​ 50";
    }else{
        echo "El​ ​ número​ ​ es menor​ ​ a ​ ​ 50";
    }
echo "<br />";
echo "<br />";

//ejercicio 5
echo "<h3>Ejercicio 05</h3>";
    $random2 = rand(0, 100);

    if($random2 > 50 && $random2 % 2 == 0 || $random2 === 0){
        echo "El​ ​ número pasa​ ​ la​ ​ condición";
    }else{
        echo "El​ ​ número​ ​ NO​ ​ pasa​ ​ la​ ​ condición";
    }

echo "<br />";
echo "<br />";

//ejercicio 6
echo "<h3>Ejercicio 06</h3>";
    $edad = 19;
    $casado = false;
    $sexo = "Femenino";

    if($edad > 18 && !$casado){
        echo "Bienvenido";
    }

    if($sexo == "Otro"){
        echo "Bienvenido";
    }

echo "<br />";
echo "<br />";

//ejercicio 07
echo "<h3>Ejercicio 07</h3>";

$cantidadDeAlumnos = -100;

if($cantidadDeAlumnos){
    echo "true <br />";
}else{
    echo "false <br />";
}

echo "imprime TRUE - siempre da TRUE";

echo "<br />";
echo "<br />";

//ejercicio 8
echo "<h3>Ejercicio 08</h3>";

if($i = 0){
    echo "true <br />";
}else{
    echo "false <br />";
}

echo "imprime TRUE con $i = 1, imprime FALSE con $i = 0";


//ejercicio 9
echo "<h3>Ejercicio 09</h3>";
    $numero = 3;

    echo ($numero % 2 == 0) ? "El numero es par" : "El numero es impar";

echo "<br />";
echo "<br />";


//ejercicio 10
echo "<h3>Ejercicio 10 y 11</h3>";
    $i = mt_rand(1, 5);

    switch ($i){
        case 1:
            echo $i." es igual a X";
            break;
        case 2:
            echo $i." es igual a X";
            break;
        case 3:
            echo "NO​ ​ es​ ​ igual​ ​ a ​ ​ 1 ​ ​ o ​ ​ 2";
            break;
        case 4:
            echo "NO​ ​ es​ ​ igual​ ​ a ​ ​ 1 ​ ​ o ​ ​ 2";
            break;
        case 5:
            echo "NO​ ​ es​ ​ igual​ ​ a ​ ​ 1 ​ ​ o ​ ​ 2";
            break;
    }

echo "<br />";
echo "<br />";
echo "<h3>Ejercicio 12</h3>";
    $x = mt_rand(1, 100);
    $y = mt_rand(1, 100);

    switch (true){
        case $x > $y:
            echo $x." es mayor a ".$y;
            break;
        case $x < $y:
            echo $y." es mayor a ".$x;
            break;
        case $x == $y:
            echo $x." e ".$y." son iguales";
    }
?>
</body>
</html>