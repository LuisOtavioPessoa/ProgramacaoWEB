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

$custo=$_REQUEST['custo'];

$porcentagem1=$custo*(5/100);
$porcentagem2=$custo*(25/100);
$porcentagem3=$custo*(35/100);

if ($custo <=39999.99){
echo "Preço ao consumidor R$".$custo + $porcentagem1;
}

elseif ($custo <=69999.99){
    echo "Preço ao consumidor R$".$custo + $porcentagem2;
}
 else echo "Preço ao consumidor R$".$custo + $porcentagem3;


?>