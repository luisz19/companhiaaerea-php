<?php

class Conexao{

    private static $instance;

    public static function getConn(){ 
        if(!isset(self::$instance)){ //verifica se a instância da conexão com o banco de dados já foi criada. Se não foi, ele cria uma nova.
            try {
                self::$instance = new \PDO('mysql:host=localhost;dbname=companhia_aerea', 'root', '');
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); // configura o modo de erro do PDO para lançar exceções
            } catch (\PDOException $e) {
                echo "Erro ao conectar ao banco de dados: " . $e->getMessage(); //erro
                exit();
            }
        }
        return self::$instance; //retorna conexao
    }
}



