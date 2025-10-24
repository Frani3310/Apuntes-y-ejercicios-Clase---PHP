<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <?php
        //Aquí empieza el código de php

        // Ejercicio 1: Fizz, Buzz, FizzBuzz.
        echo "<h2>EJERCICIO 1 - FIZZ, BUZZ, FIZZBUZZ</h2>";
        echo "<br><br>";
        $num = 0;

        while($num <= 30){ //Si el número es menor o igual a 30, entonces...
            if($num % 3 == 0 && $num % 5 == 0){ //Si es múltiplo de los dos imprime FizzBuzz. El más restrictivo debe ser el primero.
                echo "FizzBuzz";
                echo "<br>";
            }elseif($num % 3 == 0){ //Si es múltiplo de 3 imprime Fizz
                echo "Fizz";
                echo "<br>";
            }elseif($num % 5 == 0){ //Si es múltiplo de 5 imprime Buzz
                echo "Buzz";
                echo "<br>";
            }else{ //Si no es múltiplo de ninguno, imprime el número.
                echo $num;
                echo "<br>";
            }
            $num++;
        }

        echo "<br><br>";

        //Ejercicio 2: Paraguas sí o no.
        echo "<h2>EJERCICIO 2 - PARAGUAS SÍ O NO</h2>";
        echo "<br><br>";
        $a = 0; //Luvia. 0 = no | 1 = sí
        $b = 0; //Viento. 0 = no | 1 = sí

        if($a == 1 && $b == 0){ //Si llueve pero no hace viento...
            echo "Se necesita paraguas.";
        }elseif($a == 1 && $b == 1){ //Si llueve y hace viento...
            echo "No se necesita paraguas.";
        }else{ //En cualquier otro caso... (No hay que colocar otro elseif porque no queremos especificar nada más)
            echo "No se necesita paraguas.";
        }

        //OJO: Hay que poner obligado el doble = (==) porque sino puede dar fallo.
        echo "<br><br>";

        //Ejercicio 3: paraguas + grados.
        echo "<h2>EJERCICIO 3 - PARAGUAS + GRADOS</h2>";
        echo "<br><br>";
        $c = 38;

        if($a == 1 && $b == 0){
            echo "Se necesita paraguas.";
        }elseif($a == 1 && $b == 1){
            echo "No se necesita paraguas.";
        }elseif($a == 0 && $b == 0 && $c > 37){ //indica que compruebe si hace más de 37 grados.
            echo "Se necesita paraguas para generar sombra, porque hacen " . $c . "ºC.";
        }else{
            echo "No se necesita paraguas.";
        }

        echo "<br><br>";

        //Ejercicio 4: Números mayores a 100.
        echo "<h2>EJERCICIO 4 - NÚMEROS MAYORES A 100</h2>";
        echo "<br><br>";
        $num1 = rand(1, 150);
        $num2 = rand(1, 150);
        $num3 = rand(1, 150);

        if($num1 > 100 || $num2 > 100 || $num3 > 100){ //Comrpueba si num1 o num2 o num3 es mayor que 100.
            echo "Uno o varios de los números es mayor que 100";
        }else{ //En caso de que no lo sea, debe indicarlo.
            echo "Ninguno de los números es mayor que 100";
        }

        echo "<br><br>";

        //Ejercicio 5: Cuenta atrás hasta cero.
        echo "<h2>EJERCICIO 5 - CUENTA ATRÁS HASTA CERO</h2>";
        echo "<br><br>";
        $contador = 10;

        if($contador > 0){ //Esto comprueba que el número no sea negativo.
            while($contador >= 0){ //Si el número es igual o mayor que 0...
                echo $contador; //Imprime el número.
                echo "<br>";
                $contador--; //Resta 1 al número.
            }
        }else{ //Si el número es negativo, imprime esto en pantalla.
            echo "ERROR: El número no es positivo.";
        }

        echo "<br><br>";

        //Ejercicio 6: Adivinar el número.
        echo "<h2>EJERCICIO 6 - ADIVINAR EL NÚMERO</h2>";
        echo "<br><br>";
        $numRandom = rand(1, 100); //Número aleatorio entre 1 y 10.
        $intentos = 0;

        do{
            $numUsuario = rand(1, 100); //Número aleatorio entre 1 y 10.
            $intentos++;
        }while($numUsuario != $numRandom);
        echo "Has acertado. El número era " . $numRandom . ". Nº de intentos: " . $intentos . ".";

        echo "<br><br>";

        //Ejercicio 7: Números primos.
        echo "<h2>EJERCICIO 7 - NÚMEROS PRIMOS</h2>";
        echo "<br><br>";
        
        $numero = rand(1, 100); //Número aleatorio entre 1 y 100.
        $esPrimo = true; //Asumimos que el número es primo.

        if($numero <= 1){ //Los números menores o iguales a 1 no son primos.
            $esPrimo = false; //Cambia el valor a falso.
        }else{ //Para números mayores que 1...
            for($i = 2; $i <= sqrt($numero); $i++){ //Comprueba si el número es divisible por algún número entre 2 y la raíz cuadrada del número.
                if($numero % $i == 0){ //Si es divisible, no es primo.
                    $esPrimo = false;  //Cambia el valor a falso.
                    break; //Sale del bucle.
                }
            }
        }

        if($esPrimo){ //Si es primo imprime esto en pantalla...
            echo "El número " . $numero . " es primo.";
        }else{ //Si no es primo imprime esto otro...
            echo "El número " . $numero . " no es primo.";
        }

        echo "<br><br>";

        /*Ejercicio 8: Calculadora. Menu: pulsa 0 para salir, 1 para sumar, 2 para restar, 3 multiplica y 4 dividir.
        Si pulsa 1, 2, 3, o 4, debe pedirle al usuario los números
        y mostrarle el resultado de la operación seleccionada.*/

        //Añadido en clase: añadir la opción 5 para calcular el módulo de un número respecto a otro.


        echo "<h2>EJERCICIO 8 - CALCULADORA</h2>";
        echo "<br><br>";
        do{ //Bucle que se repite hasta que el usuario pulse 0.
            echo "<h3>--- CALCULADORA ---</h3>";
            echo "<br><br>";
            echo "OPCIONES:<br>";
            echo "1. Sumar<br>";
            echo "2. Restar<br>";
            echo "3. Multiplicar<br>";
            echo "4. Dividir<br>";
            echo "5. Módulo de un número respecto a otro<br>";
            echo "0. Salir<br><br>";
            $opcion = readline("Elige una opción: ");
            
            if($opcion >= 1 && $opcion <= 4){ //Comprueba si la opción es válida entre 1 y 4.
                $n1 = readline("Introduce el primer número: ");
                $n2 = readline("Introduce el segundo número: ");
                $resultado = 0;

                if($opcion == 1){ //Esto realiza la suma.
                    $resultado = $n1 + $n2;
                    echo "El resultado de la suma es: " . $resultado . "<br><br>";
                }elseif($opcion == 2){ //Esto realiza la resta.
                    $resultado = $n1 - $n2;
                    echo "El resultado de la resta es: " . $resultado . "<br><br>";
                }elseif($opcion == 3){ //Esto realiza la multiplicación.
                    $resultado = $n1 * $n2;
                    echo "El resultado de la multiplicación es: " . $resultado . "<br><br>";
                }elseif($opcion == 4){ //Esto realiza la división, pero hay que tener en cuenta algo.
                    if($n2 == 0){ //Si el segundo número es 0, no hace la división.
                        echo "Error: No se puede dividir entre cero.<br><br>";
                    }else{ //Si no es 0, realiza la división.
                        $resultado = $n1 / $n2;
                        echo "El resultado de la división es: " . $resultado . "<br><br";
                    }
                }elseif($opcion == 5){ //Esto realiza el módulo.
                    $resultado = $n1 % $n2; //El módulo es el resto de una división.
                    echo "El resultado del módulo es: " . $resultado . "<br><br>";
                }
            } elseif($opcion != 0){
                echo "Opción no válida. Por favor, elige una opción correcta.<br><br>";
            }
        }while($opcion != 0); //Termina el bucle cuando el usuario pulsa 0

        echo "<br><br>";

        /*Ejercicio 9: (en clase)Escribe un programa que pida un nombre de usuario y una contraseña, y verifique si ambos cumplen con estas condiciones:
        a) El nombre de usuario debe tener más de 5 caracteres.
        b) La contraseña debe tener al menos 8 caracteres y contener al menos un número.
        c) Usa condicionales con operadores AND y OR para validar.*/

        echo "<h2>EJERCICIO 9 - VALIDAR USUARIO Y CONTRASEÑA</h2>";
        echo "<br><br>";
        

        //Aquí finaliza el código de php
    ?>
</body>
</html>