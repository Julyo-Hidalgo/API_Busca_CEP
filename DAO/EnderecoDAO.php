<?php

use ApiCEP\DAO\DAO\DAO;

class EnderecoDAO extends DAO{

    public function __construct()
    {
        parent::__construct();
    }

    public function selecByCep(int $cep){
        $sql = "select * from logradouro where cep = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $cep);
        $stmt->execute();

        $endereco_obj = $stmt->fetchObject("App\Model\EnderecoModel");

        $endereco_obj->arr_cidades = $this->selecCidadesByUf($endereco_obj->UF);

        return $endereco_obj;
    }

    public function selectLogradouroByBairro(string $bairro, int $id_cidade){
        $sql = "select * from logradouro where descricao_bairro = ? AND id_cidade = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $bairro);
        $stmt->bindValue(2, $id_cidade);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS);
    }

    public function selecCidadesByUf($uf){
        $sql = "select * from cidade where uf = ? order by descricao";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $uf);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS);
    }
}