<?php


function conexao(){
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'dbpetscare';
  

   if( $conexao = mysqli_connect($servidor, $usuario, $senha, $database)){
       //echo('Foi a conexao');
    return $conexao;
   }else{
       //echo('não foi');
       return false;
   }



}





?>