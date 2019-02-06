<?php
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de usuários</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="container">
            <h3>Cadastro de usuário</h3>
            <form action="cadastrar.php" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome completo">
                <input type="email" name="email" id="email" placeholder="E-mail"><br><br>
                <span>Selecione uma profissão.</span><br>
                <select name="profissao">
                    <?php
                    $sql = "select id, nome from profissoes order by nome asc";
                    $resultado = mysqli_query($conexaoBaseDados, $sql);
                    while ($array = mysqli_fetch_assoc($resultado)) {
                        $nome = $array['nome'];
                        $id = $array['id'];
                        print("<option value='$id'>" . ucfirst($nome) . "</option>");
                    }
                    ?>
                </select>

                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </body>
</html>