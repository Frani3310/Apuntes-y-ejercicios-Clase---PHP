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
                /* + Suma 5 + 3 = 8
                   - Resta 5 - 3 = 2
                   * Multiplicación 5 * 3 = 15
                   / División  5 / 3 = 1.6666
                   % Módulo (resto de una división) 5 % 3 = 2
                   ++ Incremento (suma 1) 5++ = 6
                   -- Decremento (resta 1) 5-- = 4
                */

                //Operadores de comparación:
                /* = Asignación (asigna el valor 5 a la variable x) $x = 5
                   == Igualdad (compara si son iguales) 5 == 3 = false
                   === Idéntico (compara si son iguales y del mismo tipo) 5 === 3 = false || 5 === 5 = true
                   != Diferente (compara si son diferentes) 5 != 3 = true
                   <> Diferente (compara si son diferentes) 5 <> 3 = true
                   !== No idéntico (compara si son diferentes o no del mismo tipo) 5 !== 3 = true
                   > Mayor que... 5 > 3 = true
                   < Menor que... 5 < 3 = false
                   >= Mayor o igual que... 5 >= 3 = true
                   <= Menor o igual que... 5 <= 3 = false
                */

            //Fin del código de PHP.
            ?>
    </body>
</html>