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
        <?php
            $c = $_GET['cod'] ?? 0;
            $busca = $banco->query("select * from jogos where cod = '$c'");
        ?>
        <h1>Detalhes do jogo</h1>
        <table class='detalhes'>
        <?php
        if (!$busca) {
            echo "Busca falhou! $banco->error";
        }else{
            if ($busca->num_rows == 1) {
                $reg = $busca->fetch_object();
                echo "<tr><td rowspan='3'>Foto";
                echo "<td><h2>$reg->nome</h2>";
                echo "<tr><td>Descricao";
                echo "<tr><td>Admin";
            } else{
                echo "<tr><td>Nenhum regstro encontrado.";
            }
        }
        ?>
        </table>
    </div>
</body>
</html>