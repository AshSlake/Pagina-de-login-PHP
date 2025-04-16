<?php require_once('cabecalho.php'); ?>
<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">
    <div class="w3-center">
        <br>
        <img src="https://e7.pngegg.com/pngimages/122/453/png-clipart-computer-icons-user-profile-avatar-female-profile-heroes-head.png" alt="Gabi" style="width:40%" class="w3-circle w3-margin-top">
    </div>

    <form action="loginAction.php" method="post" class="w3-container">
        <div class="w3-section">
            <label style="font-weight:bold;">Usuário</label>
            <input type="text" class="w3-input w3-border w3-margin-bottom" placeholder="Digite o usuario"
                name="txtUsuario" require>
            <label style="font-weight:bold;">Senha</label>
            <input type="password" class="w3-input w3-border w3-margin-bottom" placeholder="Digite a senha"
                name="txtSenha" require>
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Login</button>
        </div>
    </form>
    <br>
</div>
<?php require_once('rodape.php') ?>