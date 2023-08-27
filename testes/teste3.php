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

/*Com o PHP podemos criar novas variáveis definindo como o nome dessas o conteúdo de outra. 
Para isso devemos utilizar o símbolo $$ seguido do nome da variável que contém o nome para atribuição.*/

//Exemplo de criação de variável dinâmica:

//Variável $veiculo recebe o valor "carro"
$veiculo="carro";
//Declaração de nova variável.O Identidificador será o conteúdo de $veiculo
$$veiculo="ferrari";
//Exibi o conteúdo de $veiculo
echo $carro;


?>