<?php

namespace App\Model;

class Conexao
{

    /* Implementação para armazenar a conexão com o banco de dados, para que se
    já existir uma conexãoa classe não criar uma nova, para um processamento,
    link e etc mais rápido (Prof. falou em método singleton). */
    
    private static $instance;

    public static function getConexao()
    {
        if(!isset(self::$instance)){
            /* Tem que colocar a barra (\) antes do PDO para ele saber que é uma
            classe nativa do PHP. */
            self::$instance = new \PDO('mysql:host=localhost;dbname=phpweb', 'root', '');
        }

        return self::$instance;
    }
}