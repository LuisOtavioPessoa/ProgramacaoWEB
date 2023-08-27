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

$nota1=8.5;
$nota2=5.5;
$nota3=4;
$nota4=3;

$media=($nota1 + $nota2 + $nota3 + $nota4)/4;

if ($media>=6){echo "A média foi " .round($media). "! Aluno APROVADO";}
else if ($media>=5) {echo "A média foi " .round($media). "! Aluno na FINAL";}
else {echo "A média foi " .round($media). "! Aluno foi REPROVADO";}



?>