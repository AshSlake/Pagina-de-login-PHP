<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font￾awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
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
    </div>
</body>

</html>