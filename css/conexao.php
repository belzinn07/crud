<?php
$host = 'localhost';
$usuario = 'root';
$senha= '';
$bd = 'sergio';
$conexao = new mysqli($host,$usuario,$senha,$bd);

if($conexao){
    echo"erro ao se comunicar com o bd".mysqli_connect_error();
}    
else{
    echo"conexão feita";
}    






?>