<?php
require_once './database/conexao.php';
require_once './database/DAO/reservaDAO.php';
require_once './database/classes/reserva.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $assentoReservado = $_POST['assento_reservado'];
    $passageiroNome = $_POST['passageiro_nome'];
    $vooId = $_POST['voo_id'];

    $reserva = new Reserva($assentoReservado, $passageiroNome, $vooId);
    $reservaDAO = new reservaDAO();
    $reservaDAO->create($reserva);
    

    header('Location: homeVoos.php'); // Redirecione para uma página de sucesso ou a mesma página com uma mensagem de sucesso
    exit();
}
?>