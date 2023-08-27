<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="teste.php"method="POST">
    Nome:<input type="text" name="nome"/><br/>
    Idade:<input type="text" name="idade"/><br/>
    <input type ="Submit" value="Enviar"/>
</form>

</body>
</html>
<?php 

$nome=$_POST['nome'];
$idade=$_POST['idade'];

echo "Nome do Usuário:".$nome;
echo "Idade do Usuário:".$idade;


?>