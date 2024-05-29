<?php

require_once './database/conexao.php';
require_once './database/DAO/vooDAO.php';
require_once './reserva_user.php';

$vooDAO = new VooDAO();
$voos = $vooDAO->read(5);  // Limitar a 5 voos
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
    <div class="main-page w-100 h-100">
        <div class="main-page-container" style="margin: 20px;">
            <div class="main-page-container-title pb-5">
                <h1 class="text-black">Escolha o seu voo:</h1>
            </div>
            <div class="voo-section d-flex gap-3">
                <?php foreach ($voos as $voo): ?>
                <div class="voo-section-container d-flex flex-column justify-content-center mb-3">
                    <div class="voo-section-title d-flex flex-column gap-3 bg-dark px-4 py-3 w-auto text-white align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <p class="de-onde-text fs-4"><?php echo htmlspecialchars($voo['origem']); ?></p>
                            <p>para</p>
                            <p class="para-onde-text fs-4"><?php echo htmlspecialchars($voo['destino']); ?></p>
                        </div>
                        <div class="d-flex gap-3">
                            <p>N° do voo: <?php echo htmlspecialchars($voo['id']); ?></p>
                        </div>
                        <div class="d-flex gap-3">
                            <p>Horário de saída: <?php echo htmlspecialchars($voo['hora_saida']); ?></p>
                            <p>Horário de Chegada: <?php echo htmlspecialchars($voo['hora_chegada']); ?></p>
                        </div>
                        <div class="d-flex gap-3">
                            <p>Data da partida: <?php echo htmlspecialchars($voo['data_partida']); ?></p>
                            <p>Data da chegada: <?php echo htmlspecialchars($voo['data_chegada']); ?></p>
                        </div>
                        <div class="d-flex gap-3">
                            <p>Vagas: <?php echo htmlspecialchars($voo['vagas']); ?></p>
                        </div>
                        <div class="d-flex gap-3">
                            <p>R$<?php echo htmlspecialchars($voo['preco']); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="reservation-form bg-light p-3 mt-2">
                <h2>Reserva de Assento</h2>
                <form action="reserva_user.php" method="POST">
                    <div class="mb-3">
                        <label for="voo_id" class="form-label">ID do Voo:</label>
                        <input type="text" class="form-control" id="voo_id" name="voo_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="assento_reservado" class="form-label">Assento Reservado:</label>
                        <input type="text" class="form-control" id="assento_reservado" name="assento_reservado" required>
                    </div>
                    <div class="mb-3">
                        <label for="passageiro_nome" class="form-label">Nome do Passageiro:</label>
                        <input type="text" class="form-control" id="passageiro_nome" name="passageiro_nome" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
