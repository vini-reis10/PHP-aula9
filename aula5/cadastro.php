<?php 

echo "<h1>Hello, WORLD</h1>";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];
$email = $_POST['e-mail'];
$salario = $_POST['salario'];
$idadeEm2030 = $idade + 8;
$idadeEm2020 = $idade - 2;

echo "<h3>Boas vindas, $nome $sobrenome!</h3>";
echo "<h3>Voce tem $idade anos</h3>";
echo "<h3>Seu e-mail é: $email";
echo "<h3>Sua idade em 2030 será $idadeEm2030 anos. Em 2020 você tinha $idadeEm2020</h3>";
















