<?php

namespace ApiCEP\DAO;

use \PDO;

abstract class DAO extends PDO{
    protected $conexao;

    function __construct()
    {
        $dsn = 'mysql:host=' . $_ENV['db']['host'] . ';dbname=' . $_ENV['db']['database'];

        $conexao = new PDO($dsn, $_ENV['db']['user'] = 'root', $_ENV['db']['pass'] = 'etecjau');
    }

} 