<?php

require_once 'conexao.php';

$nome = mb_strtolower(trim($_POST['nome']));
$email = mb_strtolower(trim($_POST['email']));
$profissao = mb_strtolower(trim($_POST['profissao']));

$sql = "insert into usuarios values(default,'$nome','$email',$profissao)";

$resultadoCadastro = mysqli_query($conexaoBaseDados, $sql); //Cadastra o usuário no banco de dados

if ($resultadoCadastro) {//se cadastro no banco de dados for realizado 
    print("<script>alert('Usuário $email cadastrado com sucesso.');</script>");
    print("<meta http-equiv='refresh' content=1;url='../index.html'>");
} else {
    print("<script>alert('Não foi possível cadastrar. Tente novamente.');</script>");
    print("<meta http-equiv='refresh' content=1;url='../index.html'>");
}

//Eu poderia utilizar também o try catch finally para tratamento de erros. Acabei tendo o imprevisto e não consegui fazer da forma ideal.