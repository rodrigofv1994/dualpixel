<?php
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de profissão</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <h3>Cadastro de usuário</h3>
        <form action="cadastrar-profissao.php" method="post">
            <input type="text" name="profissao" id="nome" placeholder="Nome da profissão">           
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>