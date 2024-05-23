<?php 
    require_once('../app/database/classes/passageiro.php');
    require_once('../app/database/DAO/passageiroDAO.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $num_passaporte = $_POST['num_passaporte'];
    
        if (!empty($nome) &&!empty($cpf) && !empty($email) &&  !empty($tel) && !empty($num_passaporte)) {
            $passageiro = new Passageiro($nome, $cpf,  $email, $tel, $num_passaporte);
            $passageiroDAO = new PassageiroDAO();
            $passageiroDAO->create($passageiro);
            
            // Autenticar o usuário automaticamente
            session_start();
            $_SESSION['autenticado'] = true;
    
            // Redirecionar para a página principal-loja.php
            header('location: homeVoos.php');
            exit();
        } else {
            header('location: registro.php');
            exit();
        }
    }




?>