<?php

// CONEXÃO COM O BANCO DE DADOS 
require("../database/conexao.php");
// tratamento do dados vindos do formulario

//TIPOS DE AÇÃO
//EXECUÇÃO DOS PROCESSOS DA AÇÃO SOLICITADA


switch ($_POST['acao']) {
    case 'inserir':
        echo 'INSERIR';exit;
        break;
    
    default:
        # code...
        break;
}