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
                $fruta = array("manzana", 1.85, 1);
                echo "La " . $fruta[0] . " está a " . $fruta[1] . "€ el kilo.";

            //Fin del código de PHP.
            ?>
    </body>
</html>