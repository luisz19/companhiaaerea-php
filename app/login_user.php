<?php 
    session_start();

    require_once('../app/database/classes/passageiro.php');
    require_once('../app/database/DAO/passageiroDAO.php');
    
    if (isset($_POST['submit'])) {
  
        $email = $_POST['email'];
        $num_passaporte = $_POST['num_passaporte'];
        //Filtrando dados do formulario por meio do metodo post.
        $passageiroDAO = new passageiroDAO();
        //Inicio o obejto DAO para usar sua função autenticar que faz um select na tabela cliente. 
        if ($passageiroDAO->autenticar($email, $num_passaporte)){
        //Verifica-se se tem um email e senha para poder permitir o acesso.
            $_SESSION['autenticado'] = true;
            header('location: homeVoos.php'); //mudar aqui !!
            exit(); 
        } else {
            header('location: login.php');
            
        }
        //adicionando ao repositorio
    }

?>