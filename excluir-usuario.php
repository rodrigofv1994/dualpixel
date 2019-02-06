<?php

require_once 'conexao.php';

$id = $_POST['id'];

$sql = "delete from usuarios where id = $id";

$resultado = mysqli_query($conexaoBaseDados, $sql); //Cadastra o usuário no banco de dados

if ($resultado) {
    print("<script>alert('Usuário removido.');</script>");
    print("<meta http-equiv='refresh' content=1;url='../index.html'>");
} else {
    print("<script>alert('Não foi possível remover. Tente novamente.');</script>");
    print("<meta http-equiv='refresh' content=1;url='../index.html'>");
} 
