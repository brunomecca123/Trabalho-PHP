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
    
    while($dados=mysqli_fetch_array($sql_consulta)){
        ?>

        <tr>
        <td><?= $dados[0] ?></td>
        
        <td><?= $dados[1] ?></td>
        
        <td><?= $dados[2] ?></td>

        <td><?= $dados[3] ?></td>

        <td><?= $dados[4] ?></td>
        
        </tr>

    <?php } ?>
    
    

    </tbody>


    </table>



</body>
</html>