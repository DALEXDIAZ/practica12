<html>
    <head>
        <title>Practica 12-variables PHP</title>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
        $nombre='ALEJANDRO';
        $edad= 20;
        $salario= 7.50;
        $estatus= true;
        echo "VALORES <br/>";
        echo "NOMBRE: ".$nombre.'<br/>';
        echo "EDAD: ".$edad.'<br/>';
        echo "SALARIO: ".$salario.'<br/>';
        echo "ESTATUS: ".$estatus;
        ?>
        <H1>OPERACIONES ARITMETICAS</H1>
        <?php
        echo "<h1>OPERACIONES ARITMETICAS</H1>";

        $valo1=15;
        $valor2=7;
        
        $suma = $valo1 + $valor2;
        $resta = $valo1 - $valor2;
        $multi = $valo1 * $valor2;
        $div = $valo1 / $valor2;

        echo "valor 1: ".$valo1;
        echo "<br/>valor 2: ".$valor2;

        echo "<br/>la suma es: ".$suma;
        echo "<br/>la resta es: ".$resta;
        echo "<br/>la multiplicacion es: ".$multi;
        echo "<br/>la divicion  es: ".$div;

        ?>
    </body>
</html>