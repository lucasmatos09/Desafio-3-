<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Funções de Data</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

<h2>Funções de Data</h2>

<?php

$agora = new DateTime();

echo "Data atual: ".$agora->format("d/m/Y H:i:s")."<br>";

$natal = new DateTime("2025-12-25");

echo "Natal: ".$natal->format("d/m/Y")."<br>";

$hoje = new DateTime();

$hoje->modify("+10 days");

echo "Daqui 10 dias: ".$hoje->format("d/m/Y")."<br>";

$data_nasc = new DateTime("2000-05-15");

$intervalo=$agora->diff($data_nasc);

echo "Idade: ".$intervalo->y." anos<br>";

$data="20/03/2026";

$obj=DateTime::createFromFormat("d/m/Y",$data);

echo "Ano da data: ".$obj->format("Y");

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>