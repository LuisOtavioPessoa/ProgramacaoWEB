<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</form>
</body>
</html>
<?php 

$nome= $_POST['nome'];
$idade= $_POST['idade'];
$telefone= $_POST['telefone'];
$email=$_POST['e-mail'];

echo "Usuário: $nome <br>";
echo "Idade: $idade <br>";
echo "Telefone: $telefone <br>";
echo "E-mail: $email<br>";
?>