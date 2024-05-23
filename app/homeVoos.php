<?php
session_start();

// // Verifica se o usuário não está autenticado, se não estiver, redireciona para a página de login
// if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
//     header('Location: trooll.php');
//     exit();
// }
require_once './database/conexao.php';

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Dona Florinda</title>
    <!-- <link rel="stylesheet" href="../app/css/principal-loja.css"> -->
    <!-- <style>
        .formulario-pagamento {
            display: none;
            margin-top: 20px;
        }
        .prato {
            margin-bottom: 20px;
        }
    </style>
    <script>
        function mostrarFormulario(preco, prato) {
            document.getElementById("formulario-pagamento").style.display = "block";
            document.getElementById("preco").value = preco;
            document.getElementById("nome-prato").innerText = prato;
        }
    </script> -->
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    </head>

    <body class="bg-dark">
        <div class="main-page w-100 h-100">
            <div class="main-page-container d-flex bg-white mx-auto my-4 flex-column px-5 py-5" style="max-width: 1080px">
                <div class="main-page-container-title pb-5">
                    <h1 class="text-black">Escolha o seu voo:</h1>
                </div>
                <div class="voo-section d-flex gap-3">
                    <div class="voo-section-container d-flex justify-content-center">
                        <div class="voo-section-title d-flex flex-column gap-3 bg-dark px-4 py-3 w-auto text-white align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <p class="de-onde-text fs-4">
                                    <php? $voo>
                                </p>
                                <p>para</p>
                                <p class=" para-onde-text fs-4">São Paulo</p>
                            </div>
                            <div class="d-flex gap-3">
                                <p>13:30</p>
                                <p>12:00</p>
                            </div>
                            <div class="botao">
                                <button>Escolher voo</button>
                            </div>
                        </div>

                    </div>
                    <div class="voo-section-container d-flex justify-content-center">
                        <div class="voo-section-title d-flex flex-column gap-3 bg-dark px-4 py-3 w-auto text-white align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <p class="de-onde-text fs-4">Juazeiro</p>
                                <p>para</p>
                                <p class=" para-onde-text fs-4">São Paulo</p>
                            </div>
                            <div class="d-flex gap-3">
                                <p>13:30</p>
                                <p>12:00</p>
                            </div>
                            <div class="botao">
                                <button>Escolher voo</button>
                            </div>
                        </div>

                    </div>
                    <div class="voo-section-container d-flex justify-content-center">
                        <div class="voo-section-title d-flex flex-column gap-3 bg-dark px-4 py-3 w-auto text-white align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <p class="de-onde-text fs-4">Juazeiro</p>
                                <p>para</p>
                                <p class=" para-onde-text fs-4">São Paulo</p>
                            </div>
                            <div class="d-flex gap-3">
                                <p>13:30</p>
                                <p>12:00</p>
                            </div>
                            <div class="botao">
                                <button>Escolher voo</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>
</body>

</html>
<!-- 
<section>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Número do Voo</th>
                    <th>Origem</th>
                    <th>Destino</th>
                </tr>
            </thead>
            <tbody>
                foreach ($dados as $dado) : ?>
                    <tr>
                        <td> echo $dado['num_voo']; ?></td>
                        <td> echo $dado['origem']; ?></td>
                        <td> echo $dado['destino']; ?></td>
                    </tr>
                 endforeach; ?>
            </tbody>
        </table>
    </div>
</section> -->