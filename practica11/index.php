<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>VARIABLES</h1>
    <?php
    $nombre='Carlos Emmanuel';
    $edad=21; //escribe tu edad
    $beca=8500.00;
    $estatus=true;
    echo "Tipos de variables <br>";
    echo $nombre.'<br/>';
    echo $edad.'<br/>';
    echo $beca.'<br/>';
    echo $estatus.'<br/>';
    echo $nombre.'Tiene '.$edad.'años de edad y gana'.$beca.'<br/>';
    ?>
    <h1>Operadores aritmeticos</h1>
    <?php
    $numero1=10;
    $numero2=5;
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    echo 'la suma es='.$suma. '<br/>'; 
    echo 'la resta es='.$resta. '<br/>';
    echo 'la multiplicacion es='.$multiplicacion. '<br/>';
    echo 'la division es='.$division. '<br/>';
    echo 'incremento de suma'.$suma++. '<br/>';
    echo 'decremento de suma '.$suma--. '<br/>';
    echo 'residuo es='.$numero1%$numero2;

    ?>
</body>
</html>