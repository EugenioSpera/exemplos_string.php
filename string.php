<?php
//retorna o tamanho da string

$str = "SENAC";
$tamanho = strlen($str);
echo $tamanho;
?>


<?php
//mostra quantos caracteres existem antes da palavra 

$str = "Seja bem vindo ao Senac";
$resultado = strpos($str,"Senac");
echo $resultado."<br>";
?>

<?php
//substituir palavra

$str = "Seja bem vindo ao Senac";
$resultado = str_replace("Senac","Google",$str);
echo $resultado."<br>";
?>


<?php
//Retorna uma parte do texto selecionado

$str = "Curso tecnico no Senac";
$resultado = substr($str,17,6); //Nesse caso pedimos para ele contar a partir da 18 casa, 6 caracteres que vai mostrar a palavra Senac8
echo $resultado."<br>";
?>


<?php
//transforma o texo em letra minuscula

$str = "AULA DE PHP";
$resultado = strtolower($str); 
echo $resultado."<br>";
?>

<?php
//transforma o texo em letra maiscula

$str = "aula de php";
$resultado = strtoupper($str); 
echo $resultado."<br>";
?>


<?php
//transforma a primeira letra de cada palavra em letra maiscula

$str = "seja bem vindo ao senac";
$resultado = ucfirst($str); 
echo $resultado."<br>";
?>

<?php
//transforma a primeira letra de cada palavra em letra maiscula

$str = "seja bem vindo ao senac";
$resultado = ucwords($str); 
echo $resultado."<br>";
?>

<?php
//Repete uma string um número especifico de vezes

$str = "Curso de Informatica<br>";
$resultado = str_repeat($str,3); //Nesse caso solicitado para repetir 3 vezes.
echo $resultado."<br>";
?>


<?php
//Inverte a string

$str = "Seja bem vindo ao senac";
$resultado = strrev($str);
echo $resultado."<br>";
?>

<?php
//Comparação de 2 string sensivel a minuscula e maiscula

$frase1 = "Senac";
$frase2 = "senac";
$resultado = strcmp($frase1,$frase2);
echo $resultado."<br>";
?>


<?php
//Comparação de 2 string 

$frase1 = "Senac";
$frase2 = "senac";
$resultado = strcasecmp($frase1,$frase2);
echo $resultado."<br>";
?>


