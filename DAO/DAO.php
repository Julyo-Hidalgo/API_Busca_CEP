<?php

namespace ApiCEP\DAO\DAO;

use \PDO;

abstract class DAO extends PDO{
    protected $conexao;

    function __construct()
    {
        $dsn = 'mysql:host=' . $_ENV['db']['host'] . ';dbname=' . $_ENV['db']['database'];

        
    }

} 