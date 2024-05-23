<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="bg-dark">
    <div class="login-container px-5 py-5 mx-auto mt-5 " style="max-width: 600px;">
        <h1 class="text-light pb-5">Entrar na sua conta</h1>
        <form class="text-light ">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Campo de e-mail</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Campo de senha</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Lembrar de mim </label>
                    </div>
                </div>


            </div>

            <!-- Submit button -->
            <button type="submit" value="enviar" name="submit" data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Ainda não se registrou? <a href="cadastro.php">Register</a></p>


            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<!-- <form action="login_user.php" method="post">
    <div class="login">
        

        <input type="email" placeholder="Email" name="email">
        <input type="number" placeholder="Número do passaporte" name="num_passaporte">

        <input class="entrar-button" type="submit" value="enviar" name="submit">

    </div>

    <div class="adm">
        <a href="cadastro.php">Não tem uma conta? cadastre-se.</a>
    </div>



    </div>

</form> -->