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

$nome=$_REQUEST['nome'];
$salario=$_REQUEST['salario'];
$vendas=$_REQUEST['vendas'];
$comissao=$vendas * (4 / 100);
$salariofinal= $salario + $vendas + $comissao;


echo "O funcionário $nome tem o salário fixo de R$$salario.<br>E nesse mês fez o total de R$$vendas em vendas e teve uma comissão de R$$comissao.<br>Portanto seu Salário Final foi de R$$salariofinal.";





?>