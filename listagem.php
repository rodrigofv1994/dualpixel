<?php
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <h3>Lista de usuários</h3>
        <table>
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Profissão</th>
            </thead>
            <tbody>
                
                    <?php
                    $sql = "select usuarios.id as cod, usuarios.nome as nome, usuarios.email as email, profissoes.nome as profissao from usuarios inner join profissoes on usuarios.profissao = profissoes.id";
                    $resultado = mysqli_query($conexaoBaseDados, $sql);
                    while ($array = mysqli_fetch_assoc($resultado)) {
                    $nome = $array['nome'];
                    $email = $array['email'];
                    $profissao = $array['profissao'];
                    $id = $array['cod'];
                    
                        print("<tr>");
                        print("<td>".ucfirst($id)."</td>");//Aqui nem precisa do ucfirst
                        print("<td>".ucfirst($nome)."</td>");
                        print("<td>".$email."</td>");
                        print("<td>".ucfirst($profissao)."</td>");
                        print("<td>");
                        print("<form action='excluir-usuario.php' method='post'>");
                        print("<input type='hidden' value='$id' name='id'>");
                        print("<button type='submit' class='delete'>Excluir</button>");
                        print("</form>");
                        print("</td>");
                        print("</tr>");
                    }
                    ?>                    
                
            </tbody>
        </table>
        
    </div>
</body>
</html>