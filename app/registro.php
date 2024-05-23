<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/login.css">
    <title>Entrar na Conta</title>
</head>
<body>
<form action="registro_user.php" method="post">
    <div class="login">
        <h1>Criar Conta</h1>

        <input type="text" placeholder="Nome" name="nome">
        <input type="email" placeholder="Email" name="email">
        <input type="number" placeholder="CPF" name="cpf">
        <input type="tel" placeholder="Telefone" name="tel">
        <input type="number" placeholder="Número do passaporte" name="num_passaporte">
        <a href="login.php">Já tem uma conta faça login!</a>
        <br>
        <button class="login" type="submit">Criar</button>
    </div>
</form>
</body>
</html>