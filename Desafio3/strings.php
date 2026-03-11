<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Funções de Strings</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

<h2>Funções de Strings</h2>

<?php

$texto = "Olá mundo";

echo "strlen: ".strlen($texto)."<br>";

echo "strtoupper: ".strtoupper($texto)."<br>";

echo "strtolower: ".strtolower($texto)."<br>";

echo "ucfirst: ".ucfirst("joão")."<br>";

$frase = "Eu gosto de maçã";
echo "str_replace: ".str_replace("maçã","banana",$frase)."<br>";

$email="contato@email.com";
echo "substr: ".substr($email,0,7)."<br>";

$entrada="   teste   ";
echo "trim: ".trim($entrada)."<br>";

$data="10-03-2026";
$partes=explode("-",$data);

echo "explode dia: ".$partes[0]."<br>";

$array=["Maçã","Banana","Uva"];

echo "implode: ".implode(", ",$array)."<br>";

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>