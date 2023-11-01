<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<h1>Gerador de numeros aleatorios</h1>

<?php
$min = "0";
$max ="100";

$num = mt_rand($min, $max);
//rand() = 1951 linear congretion generator
//a mais usada porem lenta pq e antiga
//pode ser reutilizada por mt_rand() q é 4x mais rapida
//mt_rand() = 1997 mersener twister
//random_int() gera um numero aleatorio criptografado seguro


echo "<p>gerando um numero aleatorio entre $min e $max ...<br>O numero gerado foi <strong>$num</strong></p>";

?>

<button>&#x1F504; gerar outro </button>


</body>
</html>
