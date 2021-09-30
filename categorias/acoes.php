<?php

// CONEXÃO COM O BANCO DE DADOS 
require("../database/conexao.php");
// tratamento do dados vindos do formulario

//TIPOS DE AÇÃO
//EXECUÇÃO DOS PROCESSOS DA AÇÃO SOLICITADA


switch ($_POST['acao']) {
    case 'inserir':

        //echo 'INSERIR';exit;
        $descricao = $_POST['descricao'];

        //MONTAGEM DA INSTRUÇÃO SQL DE INSERÇÃO DE DADOS
        $sql = "INSERT INTO tbl_categoria (descricao) VALUES ('$descricao')";

        // echo $sql;exit;

        /*
        mysqli_query parametros:
        1- Uma conexão aberta e válida
        2- Uma instrução sql váida */


        $resultado = mysqli_query($conexao, $sql);

        header('location:index.php'); 

        // echo '<pre>';
        // var_dump($resultado);
        // echo '</pre>';
        // exit;

        break;
    
    default:
        # code...
        break;
}