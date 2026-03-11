<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Funções Numéricas</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

<h2>Funções Numéricas</h2>

<?php

echo "round: ".round(4.7)."<br>";

echo "ceil: ".ceil(4.3)."<br>";

echo "floor: ".floor(4.7)."<br>";

echo "abs: ".abs(-10)."<br>";

echo "Número aleatório: ".mt_rand(1,10)."<br>";

echo "max: ".max(5,10,3)."<br>";

echo "min: ".min(5,10,3)."<br>";

echo "pow: ".pow(2,3)."<br>";

echo "sqrt: ".sqrt(25)."<br>";

echo "number_format: ".number_format(1250.75,2,",",".")."<br>";

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>