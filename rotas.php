<?php

use ApiCEP\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/endereco/by-cep':
        //EnderecoController::
    break;

    case '/logradouro/by-bairro':

    break;

    case '/cep/by-logradouro':
        //EnderecoController::
    break;

    case '/cidade/by-uf':
        //EnderecoController::
    break;

    case '/bairro/by-cidade':
        //EnderecoController::
    break;
    
    default:
        http_response_code(403);
    break;
}