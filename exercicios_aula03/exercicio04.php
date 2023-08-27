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

$base_maior=$_REQUEST['basemaior'];
$base_menor=$_REQUEST['basemenor'];
$altura=$_REQUEST['altura'];
$area= ($base_maior + $base_menor)*$altura / 2;


echo "A Área do Trapézio é $area";


?>
