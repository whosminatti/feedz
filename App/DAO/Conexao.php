<?php

namespace App\DAO;

abstract class Conexao
{
    /**
     * @var PDO
     * PDO - biblioteca PHP pra trabalhar com BD voltado p OO
     */
    protected $pdo;

    public function __construct()
    {
        $host = getenv('TESTE_FEEDZ_MYSQL_HOST');
        $port = getenv('TESTE_FEEDZ_MYSQL_PORT');
        $user = getenv('TESTE_FEEDZ_MYSQL_USER');
        $pass = getenv('TESTE_FEEDZ_MYSQL_PASSWORD');
        $dbname = getenv('TESTE_FEEDZ_MYSQL_DBNAME');

        //data source name
        $dsn = "mysql:host={$host};dbname={$dbname};port={$port};";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}
