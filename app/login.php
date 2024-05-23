<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/login.css">
    
    <title>Login</title>
</head>
<body>
    <form action="login_user.php" method="post">
    <div class="login">
            <h1>Entrar na sua conta</h1>

            <input type="email" placeholder="Email" name="email">
            <input type="number" placeholder="Número do passaporte" name="num_passaporte">

            <input class="entrar-button" type="submit" value="enviar" name="submit">

        </div>
            
        <div class="adm">
            <a href="cadastro.php">Não tem uma conta? cadastre-se.</a>
        </div>

        

    </div>
        
    </form>
</body>
</html>