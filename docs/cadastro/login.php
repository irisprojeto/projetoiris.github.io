
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/syle.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/undraw_join_re_w1lh.svg" alt="">
        </div>
        <div class="form">
            <form action="teste_login.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Faça Login</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="cadastro.php">Cadastre-se</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit" name="submit"><a>Continuar</a></button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>