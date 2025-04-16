<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font￾awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
        $nome = $_POST['txtUsuario'];
        $senha = $_POST['txtSenha'];
        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'pwii';
        $conexao = new mysqli($serverName, $userName, $password, $dbName);

        if ($conexao->connect_error) {
            die('Conexão com Banco de Dados Falhou:' . $conexao->connect_error);
        }

        $sql = "SELECT * FROM usuario WHERE nome = '" . $nome . "';";
        $resultado = $conexao->query($sql);
        $linha = mysqli_fetch_array($resultado);

        if ($linha == null) {
            echo '
            <a href="index.php>
                <h1 class="w3-button w3-teal">Login invalido!</h1>
            ';
        }

        if ($linha['senha'] == $senha) {
            echo '
        <a href="index.php">
        <h1 class="w3-button w3-teal">' . $nome . ' seja bem vindo!</h1>
        </a>
        ';
        } else {
            echo '
        <a href="index.php">
        <h1 class="w3-button w3-teal">Login invalido!</h1>
        </a>
        ';
        }
        $conexao->close();
        ?>
    </div>
</body>

</html>