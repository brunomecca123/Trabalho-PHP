<?php
include_once('conexao.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista dos Produtos </title>
</head>



<body>
<center>

<h1> Lista dos Produtos </h1>


    <table rules="all">
    
    
    <thead>
        <th> PRODUTO </th>
        <th> DESCRICAO</th>
        <th> MARCA </th>
        <th> ESTOQUE </th>
        <th> PRECO </th>

    </thead>


    <tbody>
    
    <?php
    
    $sql_consulta=mysqli_query( $ligar , "SELECT * FROM produtos" ); 
    $TOTAL =mysqli_num_rows($sql_consulta);


    while($dados=mysqli_fetch_array($sql_consulta)){
        ?>

        <tr>
        <td><?= $dados[0] ?></td>
        
        <td><?= $dados[1] ?></td>
        
        <td><?= $dados[2] ?></td>

        <td><?= $dados[3] ?></td>

        <td><?= $dados[4] ?></td>


        <td> <a href="excluir.php?codigo= <?= $dados[0] ?> "> EXCLUIR </a> </td>
        <td> <a href="editar.php?codigo= <?= $dados[0] ?> "> EDITAR</a> </td>
        </tr>

    <?php } ?>
    
    <tr> <td> TOTAL: <?= $TOTAL ?> </td> </tr> 

    
    </tbody>

<a href="index.html"> Menu </a> <br><br><br>


    </table>


    </center>
</body>
</html>