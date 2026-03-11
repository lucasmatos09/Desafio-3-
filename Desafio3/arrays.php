<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Funções de Array</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

<h2>Funções de Array</h2>

<?php

$frutas=["Maçã","Banana","Uva"];

echo "count: ".count($frutas)."<br>";

array_push($frutas,"Laranja");

echo "array_push: ";
print_r($frutas);

echo "<br>";

array_pop($frutas);

echo "array_pop: ";
print_r($frutas);

echo "<br>";

$config=[
"usuario"=>"admin",
"senha"=>"123"
];

if(array_key_exists("usuario",$config)){
echo "A chave usuario existe<br>";
}

if(in_array("Banana",$frutas)){
echo "Banana está no array<br>";
}

$a1=["a","b"];
$a2=["c","d"];

$result=array_merge($a1,$a2);

echo "array_merge: ";
print_r($result);

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>