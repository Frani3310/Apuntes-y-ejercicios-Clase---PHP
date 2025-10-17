<!DOCTYPE html>
<html>
    <body>
        <h1>Mi primera web</h1>
            <?php // Por aqui comienza la manera de programar en PHP.
                echo "Mi primer script PHP"; // Con echo se muestra información en pantalla. Las cadenas de texto entre comillas.

                //Ejemplos de Variables:
                $txt = "Hola Mundo, 22 de Septiembre";
                $x = 5; //Esto es una variable numérica.
                $y = 1.5;
                $edad = 25;
                $nombre = "Fran"; //Esto es una variable de texto, que siempre van entre comillas.
                $ciudad = "Écija";

                //Ejercicio 3: Variables
                echo "<br><br><br>"; //Esto es un salto de línea.
                echo "El valor de mi variable txt es: ".$txt; //El punto (.) sirve para concatenar todo, una cosa tras otras.
                echo "<br><br><br>";
                echo "Mi edad es: ".$edad;
                echo "<br><br><br>";
                echo "Mi nombre es " . $nombre . " y tengo " . $edad . " años. Vivo en " . $ciudad . " y estoy aprendiendo PHP.";

                //CLASE 25/09/2025
                //Extra:
                echo "<br><br><br>";
                print($txt); //Print es similar a echo.

                //Si se quiere mostrar en pantalla un carácter especial se hará de la siguiente forma:
                echo "<br><br><br>";
                echo "Este es el carácter comillas simples: \'"; //La barra invertida (\) sirve para escapar caracteres especiales.
                echo "<br><br>";
                echo "Este es el carácter comillas dobles: \"";
                echo "<br><br>";
                echo "Este es la variable dólar x: \$x";

                //Ejemplo de caracteres especiales:
                //En caso de \n sirve para dar un salto en la línea de código, pero no en la web.
                //El símbolo \t sirve para dar una tabulación en la línea de código, pero no en la web.

                //Booleanos:
                echo "<br><br><br>";
                $variableBool = true; //Variable booleana, puede ser true o false.
                $variableBool2 = TRUE; //También se puede escribir en mayúsculas.
                echo "El tipo de la variable \$variableBool es: <br>";
                var_dump($variableBool); //Var_dump muestra el tipo de variable y su valor.
                echo "<br><br>";
                echo "El tipo de la variable \$variableBool2 es: <br>";
                var_dump($variableBool2);

                //Array simples:
                $cars = array("Volvo", "BMW", "Toyota"); //Como si fuese una caja. La primera marca está en la posición 0.
                echo "<br><br><br>";
                echo "El coche que está en la posición 2 del array es: " . $cars[2]; //Pido que indique el coche de la posición 2 (Toyota).

                /*Ejemplo de Array:
                $alumno = array(nombre, apellido1, apellido2, edad(entero), calificacion(decimal), aprobado(booleano));
                Después de definir el array, se imprimirá con un echo. */

                echo "<br><br><br>";
                $alumno = array("Francisco", "García", "Carmona", 25, 8.5, true);
                echo "El alumno " . $alumno[0] . " " . $alumno[1] . " ha aprobado con " . $alumno[3] . " años.";
                echo "<br><br>";

                //Ejercicio 4: Array
                $fruta = array("manzana", 1.85, 3);
                echo "La " . $fruta[0] . " está a " . $fruta[1] . "€ el kilo.";
                echo "<br><br>";
                echo "Mi compra ha costado " . $fruta[1] * $fruta[2] . "€."; //Con el asterisco (*) se multiplica.
                
                //Operadores aritméticos:
                /* 
                   + Suma 5 + 3 = 8
                   - Resta 5 - 3 = 2
                   * Multiplicación 5 * 3 = 15
                   / División  5 / 3 = 1.6666
                   % Módulo (resto de una división) 5 % 3 = 2
                   ++ Incremento (suma 1) 5++ = 6
                   -- Decremento (resta 1) 5-- = 4
                */

                //Operadores de comparación:
                /* 
                   = Asignación (asigna el valor 5 a la variable x) $x = 5
                   == Igualdad (compara si son iguales) 5 == 3 = false
                   === Idéntico (compara si son iguales y del mismo tipo) 5 === 3 = false || 5 === 5 = true
                   != Diferente (compara si son diferentes) 5 != 3 = true
                   <> Diferente (compara si son diferentes) 5 <> 3 = true
                   !== No idéntico (compara si son diferentes o no del mismo tipo) 5 !== 3 = true
                   > Mayor que... 5 > 3 = true
                   < Menor que... 5 < 3 = false
                   >= Mayor o igual que... 5 >= 3 = true
                   <= Menor o igual que... 5 <= 3 = false

                   Existe un operador adicional para comparar 2 variables, sin tener que ecribir 3 posibles
                   comparaciones. Es el operador <=> (spaceship).
                */
                
                //Condicionales:
                /* 
                   if (condición) {
                       //Código a ejecutar si la condición es verdadera.
                   } else {
                       //Código a ejecutar si la condición es falsa.
                   }
                     elseif (condición) {
                          //Código a ejecutar si la condición es verdadera.
                     } else {
                          //Código a ejecutar si la condición es falsa.
                        }
                */
                echo "<br><br>";

                //Ejemplo de condicional:
                $edadAlumno = 20;
                $edadPadre = 48;

                if ($edadAlumno >= 18) {
                    echo "El alumno es mayor de edad y puede salir del instituto en el recreo.";
                }else {
                    echo "El alumno es menor de edad y no puede salir del instituto en el recreo.";
                }

                echo "<br><br>";

                if ($edadAlumno >= 18 && $edadAlumno < 35) {
                    echo "El alumno es mayor de edad y puede solicitar becas.";
                } else {
                    echo "El alumno no puede solicitar becas porque es menor de edad o tiene más de 35 años.";
                }

                echo "<br><br>";

                //Ejercicio 5: práctica de array + condicionales.
                $notas = array(5,3,2,7,10,9,8,2,4);
                $aprobados = 0;
                $suspensos = 0;

                echo "<br><br>";

                if ($notas[0] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[1] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[2] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[3] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[4] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[5] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[6] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[7] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                if ($notas[8] >= 5) {
                    $aprobados++;
                } else {
                    $suspensos++;
                }
                echo "El número de aprobados es " . $aprobados . " y el número de suspensos es " . $suspensos . ".";
                echo "<br><br>";

                $media = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8]) / 9;

                if ($media < 5) {
                    echo "La media de las notas sale SUSPENSO.";
                } elseif ($media >= 5 && $media < 7) {
                    echo "La media de las notas sale APROBADO.";
                } elseif ($media >= 7 && $media < 9) {
                    echo "La media de las notas sale NOTABLE.";
                } else {
                    echo "La media de las notas sale SOBRESALIENTE.";
                }

                echo "<br><br>";

                //Ejercicio 5.5: práctica de array + loops.
                //While:
                echo "EJERCICIO 5.1 - PRÁCTICA DE ARRAY + LOOP WHILE";
                echo "<br>";
                //Inicializo las variables:
                $n = 0;
                $aprobados = 0;
                $suspensos = 0;

                while ($n < count($notas)) {
                    if ($notas[$n] >= 5) {
                        $aprobados++;
                    } else {
                        $suspensos++;
                    }
                    $n++; //Incremento la variable n en 1 para que no se quede en un bucle infinito
                }

                echo "El número de aprobados es " . $aprobados . ".";
                echo "<br>";
                echo "El número de suspensos es " . $suspensos . ".";
                echo "<br><br>";

                //Do...While:
                echo "EJERCICIO 5.2 - PRÁCTICA DE ARRAY + LOOP DO...WHILE";
                echo "<br>";

                $n = 0;
                $aprobados = 0;
                $suspensos = 0;

                do {
                    if ($notas[$n] >= 5) {
                        $aprobados++;
                    } else {
                        $suspensos++;
                    }
                    $n++; //Incremento la variable n en 1 para que no se quede en un bucle infinito
                } while ($n < count($notas));
                
                echo "El número de aprobados es " . $aprobados . ".";
                echo "<br>";
                echo "El número de suspensos es " . $suspensos . ".";
                echo "<br><br>";

                //For:
                echo "EJERCICIO 5.3 - PRÁCTICA DE ARRAY + LOOP FOR";
                echo "<br>";

                $aprobados = 0;
                $suspensos = 0;

                for ($n = 0; $n < count($notas); $n++) {
                    if ($notas[$n] >= 5) {
                        $aprobados++;
                    } else {
                        $suspensos++;
                    }
                }

                echo "El número de aprobados es " . $aprobados . ".";
                echo "<br>";
                echo "El número de suspensos es " . $suspensos . ".";
                echo "<br><br>";

                //While (hacer media de las notas):
                echo "EJERCICIO 5.4 - PRÁCTICA DE ARRAY + LOOP WHILE (MEDIA DE NOTAS)";
                echo "<br>";

                $n = 0;
                $sumaNotas = 0;

                while ($n < count($notas)) {
                    $sumaNotas = $sumaNotas + $notas[$n];
                    $n++;
                }
                $media = $sumaNotas / count($notas);

                echo "La media de las notas es: " . $media . ".";
                echo "<br><br>";

                //Do...While (hacer media de las notas):
                echo "EJERCICIO 5.5 - PRÁCTICA DE ARRAY + LOOP DO...WHILE (MEDIA DE NOTAS)";
                echo "<br>";

                $n = 0;
                $sumaNotas = 0;

                do{
                    $sumaNotas = $sumaNotas + $notas[$n];
                    $n++;
                }while ($n < count($notas));

                $media = $sumaNotas / count($notas);
                echo "La media de las notas es: " . $media . ".";
                echo "<br><br>";

                //For (hacer media de las notas):
                echo "EJERCICIO 5.6 - PRÁCTICA DE ARRAY + LOOP FOR (MEDIA DE NOTAS)";
                echo "<br>";

                $sumaNotas = 0;

                for($n = 0; $n < count($notas); $n++){
                    $sumaNotas = $sumaNotas + $notas[$n];
                }

                $media = $sumaNotas / count($notas);
                echo "La media de las notas es: " . $media . ".";
                echo "<br><br>";

                //Ejercicio 6: práctica de array + condicionales + operadores ariméticos.
                $precioKg = array(10,11.3,1.28,4.7,2);

                if ($precioKg[0] >=4) {
                    $precioKg[0] = $precioKg[0] - ($precioKg[0] * 0.1); //Si el precio es mayor o igual a 4, se le aplica un descuento del 10%.
                } else {
                    $precioKg[0] = $precioKg[0] + ($precioKg[0] * 0.05); //Si es menor a 4, se le aplica un incremento del 5%.
                }
                if ($precioKg[1] >=4) {
                    $precioKg[1] = $precioKg[1] - ($precioKg[1] * 0.1);
                } else {
                    $precioKg[1] = $precioKg[1] + ($precioKg[1] * 0.05);
                }
                if ($precioKg[2] >=4) {
                    $precioKg[2] = $precioKg[2] - ($precioKg[2] * 0.1);
                } else {
                    $precioKg[2] = $precioKg[2] + ($precioKg[2] * 0.05);
                }
                if ($precioKg[3] >=4) {
                    $precioKg[3] = $precioKg[3] - ($precioKg[3] * 0.1);
                } else {
                    $precioKg[3] = $precioKg[3] + ($precioKg[3] * 0.05);
                }
                if ($precioKg[4] >=4) {
                    $precioKg[4] = $precioKg[4] - ($precioKg[4] * 0.1);
                } else {
                    $precioKg[4] = $precioKg[4] + ($precioKg[4] * 0.05);
                }

                echo "El nuevo precio de la manzana es: " . $precioKg[0] . "€/kg.";
                echo "<br><br>";

                //Loop While:
                echo "EJERCICIO 6.1 - PRÁCTICA DE ARRAY  + LOOP WHILE";
                echo "<br>";
                $f = 0;
                while ($f < count($precioKg)) {
                    if ($precioKg[$f] >=4) {
                        $precioKg[$f] = $precioKg[$f] - ($precioKg[$f] * 0.1);
                    } else {
                        $precioKg[$f] = $precioKg[$f] + ($precioKg[$f] * 0.05);
                    }
                    echo "El precio de la fruta es " . $precioKg[$f] . "€/kg.";
                    echo "<br>";
                    $f++;
                }
                echo "<br><br>";

                //Loop Do...While:
                echo "EJERCICIO 6.2 - PRÁCTICA DE ARRAY  + LOOP DO...WHILE";
                echo "<br>";
                $f = 0;
                do {
                    if ($precioKg[$f] >=4) {
                        $precioKg[$f] = $precioKg[$f] - ($precioKg[$f] * 0.1);
                    } else {
                        $precioKg[$f] = $precioKg[$f] + ($precioKg[$f] * 0.05);
                    }
                    echo "El precio de la fruta es " . $precioKg[$f] . "€/kg.";
                    echo "<br>";
                    $f++;
                } while ($f < count($precioKg));
                echo "<br><br>";

                //Loop For:
                echo "EJERCICIO 6.3 - PRÁCTICA DE ARRAY  + LOOP FOR";
                echo "<br>";
                for ($f = 0; $f < count($precioKg); $f++) {
                    if ($precioKg[$f] >=4) {
                        $precioKg[$f] = $precioKg[$f] - ($precioKg[$f] * 0.1);
                    } else {
                        $precioKg[$f] = $precioKg[$f] + ($precioKg[$f] * 0.05);
                    }
                    echo "El precio de la fruta es " . $precioKg[$f] . "€/kg.";
                    echo "<br>";
                }
                echo "<br><br>";

                //Ejercicio 7: Comprobar si el año es bisiesto o no.
                echo "EJERCICIO 7 - PRÁCTICA DE LOOPS (AÑOS BISIESTOS)";
                echo "<br>";

                $anno = array(2000, 2003, 2011, 2016, 2020);
                $a = 0;

                while($a < count($anno)){ //Si el año es divisible entre 4 y el resto da 0 y no entre 100 y que el resto de 0, o es divisible entre 400.
                    if(($anno[$a] % 4 == 0 && $anno[$a] % 100 != 0) || ($anno[$a] % 400 == 0)){ 
                        echo "El año " . $anno[$a] . " es bisiesto.";
                    }else{
                        echo "El año " . $anno[$a] . " no es bisiesto.";
                    }
                    echo "<br>";
                    $a++;
                }
                echo "<br><br>";

                //Ejercicio 7.1: Imprimir la lista de los 100 primeros nº pares.
                echo "EJERCICIO 7.1 - PRÁCTICA DE LOOPS (100 PRIMEROS NÚMEROS PARES)";
                echo "<br>";

                $numPares = array();
                for($i = 0; $i < 200; $i++){ //Desde 0 hasta 199.
                    if($i % 2 == 0){ //Si el número es divisible entre 2 y el resto da 0, es par.
                        $numPares[] = $i; //Se añade el número par al array.
                    }
                }
                
                echo "Los 100 primeros números pares son: <br>";
                for($i = 0; $i < count($numPares); $i++){
                    echo $numPares[$i] . " "; //Se imprime cada número par seguido de un espacio.
                }
                echo "<br><br>";

                //Switch:

                //Loops: While
                $i = 1;
                while ($i < 6){ //Mientras que i sea menor que 6, se ejecuta el código.
                    echo "Estoy en un bucle while y el valor de i es: ";
                    echo $i;
                    echo "<br>";
                    $i++;
                }
                echo "<br><br>";

                //Loops: Do...While
                do {
                    echo "Estoy en un bucle do...while y el valor de i es: ";
                    echo $i;
                    echo "<br>";
                    $i++;
                } while ($i < 6); //Se ejecuta el código al menos una vez, y luego se comprueba la condición.
                echo "<br><br>";

                //Loops: For
                for ($i = 0; $i < 6; $i++){ //Desde i=0, mientras i sea menor que 6, se incrementa i en 1.
                    echo "Estoy en un bucle for y el valor de i es: ";
                    echo $i;
                    echo "<br>";
                    //No es necesario poner $i++ dentro del bucle, porque ya se pone en la definición del for.
                }
                echo "<br><br>";

                //Loops: Foreach
            //Fin del código de PHP.
            ?>
    </body>
</html>