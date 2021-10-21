<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Listagem de jogos</title>
</head>
<body>
    <?php
        require "includes/banco.php";
        require "includes/funcoes.php";
    ?>
    <div id="corpo">
        <h1>Escolha seu jogo</h1>
        <table class="listagem">
            <?php 
                $busca = $banco->query("select * from jogos order by nome");
                if (!$busca) {
                    echo "<tr><td>Infelismente a busca deu errado.";
                }else{
                    if ($busca->num_rows == 0) {
                        echo "<tr><td>Nenhum registro encontrado.";
                    } else{
                        while ($reg = $busca->fetch_object()) {
                            $t = thumb($reg->capa);
                            echo "<tr><td><img src='$t' class='mini'>";
                            echo "<td><a href='detalhes.php?cod=$reg->cod'>$reg->nome</a>";
                            echo "<td>Admin";
                        }
                    }
                }
            ?>
            <tr> 
                <td>Foto
                <td>Nome
                <td>Admin
            <tr>
                <td>Foto
                <td>Nome
                <td>Admin
            <tr>
                <td>Foto
                <td>Nome
                <td>Admin
            <tr>
                <td>Foto
                <td>Nome
                <td>Admin
        </table>
    </div>
    <?php $banco ->close(); ?>
</body>
</html>