<?php

require_once 'conexao.php';

//Abaixo eu obtenho via global post o que foi digitado no input e retiro a letra maiúscula. Quando eu for exibir a consulta eu coloco novamente com um método do php para string.
$nome = mb_strtolower(trim($_POST['profissao']));

$sql = "insert into profissoes values(default,'$nome')";

$resultadoCadastro = mysqli_query($conexaoBaseDados, $sql); //Cadastra o usuário no banco de dados

if ($resultadoCadastro) {//se cadastro no banco de dados for realizado 
    print("<script>alert('Profissão $nome cadastrada com sucesso.');</script>");
    //abaixo eu poderia usar o header location. Mas o header location ignora o alert.
    print("<meta http-equiv='refresh' content=1;url='../index.html'>");
} else {
    print("<script>alert('Não foi possível cadastrar. Tente novamente.');</script>");
    print("<meta http-equiv='refresh' content=1;url='../index.html'>");
}

//Eu poderia utilizar também o try catch finally para tratamento de erros. Acabei tendo o imprevisto e não consegui fazer da forma ideal.