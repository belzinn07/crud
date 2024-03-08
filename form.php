<?php
 //iclude= herda as configuraçoes de outro arquivo*/
 include('conexao.php');
$nome = $_POST['nome'] ;
$email= $_POST['email'] ;
$telefone= $_POST['telefone'] ;
$data_de_nascimento= $_POST['data_de_nascimento'] ;
$cidade= $_POST['cidade'] ;
$estado= $_POST['estado'] ;
$endereco= $_POST['endereco'] ;
$senha= $_POST['senha'] ;

$resultado = mysqli_query($conexao,"INSERT INTO login"("nome,email,telefone,data_de_nascimento,cidade,estado,endereco,senha) VALUES($nome,$email,$telefone,$data,$cidade,$estado,$endereco,$senha)")/*insere na tabela login*/

?>