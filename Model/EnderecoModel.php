<?php

namespace ApiCEP\Model;

use ApiCEP\DAO\EnderecoDAO as DAOEnderecoDAO;
use Exception;
use App\Dao\EnderecoDAO;

class EnderecoModel extends Model{
    public $id_logradouro, $tipo, $descricao, $id_cidade, $uf, $complemento, $descricao_sem_numero, $descricao_cidade, $codigo_cidade_ibge, $descricao_bairro;

    public $array_cidade;

    public function getLogradouroByBairroAndCidade(string $bairro, int $id_cidade){
        try{
            $dao = new DAOEnderecoDAO;

            $this->rows = $dao->selectLogradouroByBairroAndCidade($bairro, $id_cidade);
        }catch(Exception $e){
            throw $e;
        }
    }
}