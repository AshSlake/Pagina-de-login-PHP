<?php require_once('cabecalho.php') ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
    $nome = $_POST['txtUsuario'];
    $senha = $_POST['txtSenha'];
    require_once 'conexaoBD.php';
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
    <?php require_once('rodape.php') ?>