<!-- 
PHP: Hypertext Preprocessor
Los scripts son ejecutados en el servidor (server-side)
Los archivos PHP pueden contener texto, HTML, CSS, JavaScript y código PHP
Un script PHP comienza : (simbolo menor que)?php y termina con ?>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
echo  "prueba";
echo "<br>";    //se envia HTML tags por echo 
$prueba = "prueba2";
echo $prueba;
?>

</body>
</html>
