<?php

include_once('conexao.php');


$id = $_GET['codigo'];

$sql_excluir=mysqli_query( $ligar, " DELETE FROM produtos WHERE id = ' $id ' " );

if($sql_excluir == true){

    echo " <script>
    
    alert(' Produto Removido com Sucesso! ')
    window.location.href= 'listagem.php';
    
    
    </script>";


 } 
 else{

    echo " <script>
    
    alert(' Falha ao Remover o Produto! ');
    window.location;href= 'listagem.php';
    
    
    </script>";

 }
 
?>

