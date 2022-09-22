<?php

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_consulta = mysqli_query($ligar, "SELECT * FROM produtos WHERE id =' $id ' ");

$dados=mysqli_fetch_array($sql_consulta);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar </title>
</head>



<body>
    <center>


<h1> TELA EDITAR PRODUTO </h1> <br><br><br>


<form method="POST"     action="atualizar.php">

<input type="hidden" name="codigo" value='<?= $dados[0] ?>' >

    PRODUTO: <br>
<input type="text" name="txt_produto" value=' <?= $dados[1] ?> '> <br>

    ESTOQUE: <br>
<input type="number" name="number_estoque" > <br>

    MARCA: <br>
<input type="text" name="txt_marca" value=' <?= $dados[2] ?> '> <br>

    PREÇO: <br>
<input type="number" name="number_preco" > <br>
<br>
<input type="submit" value="Editar">

<br>
<br>


<a href="index.html"> Menu </a>


</form>


</center>


    
</body>




</html>