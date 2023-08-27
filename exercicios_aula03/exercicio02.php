<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 

$nome =$_REQUEST['nome'];
$nota1 =$_REQUEST ['nota1'];
$nota2 =$_REQUEST ['nota2'];
$media=($nota1 + $nota2)/2;

echo "O(A) aluno(a) $nome da disciplina de Programação ficou com $media de média! ";

if ($media >=7) echo "Aluno(a) APROVADO(a)!<br>";
else if ($media >=6) echo "Aluno(a) na FINAL!<br>";
else echo "Aluno(a) REPROVADO(a)!<br>";







?>