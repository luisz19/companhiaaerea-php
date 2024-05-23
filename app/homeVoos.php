<?php 
session_start();

// // Verifica se o usuário não está autenticado, se não estiver, redireciona para a página de login
// if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
//     header('Location: trooll.php');
//     exit();
// }



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
    <h1>FOII</h1>
</body>
</html>