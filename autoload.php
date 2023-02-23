<?php

spl_autoload_register(function($nome_da_classe){
    $nome_da_classe = str_replace('\\', '/', $nome_da_classe);
    $arquivo = 'D:\Julyo\API_Busca_CEP' . '/' . $nome_da_classe . '.php';

    if (file_exists($arquivo)) {
        include $arquivo;
    }else
        exit('Arquivo: ' . $arquivo .  ' não foi encontrado');
});