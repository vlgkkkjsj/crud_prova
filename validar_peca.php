<?php

    include('conexao/db.php');

    if(iseet($_POST['nome'])&& isset($_POST['fornecedor'])&& isset($_POST['tipo']))
    {

        $nome = $_POST['nome'];
        $fornecedor = $_POST['fornecedor'];
        $tipo = $_POST['tipo'];

    if(empty($nome) or empty($fornecedor) or empty($tipo))
    {
        print "<script>alert('informe todas as informações')</script>";
        print "<script>location.href='?page=novo';</script>";
    }
    else 
    {
        $sql = "INSERT INTO  nova_peca (nome,fornecedor,tipo) VALUES ('{$nome}','{$fornecedor}','{$tipo}')";
        $res = $conn ->query($sql);

        if(res== true)
        {
            print "<script>alert('cadastro concluido')</script>";
            print "<script>location.href='listar.php'</script>";
        }
        else 
        {
            print"<script>alert('Nao foi possivel cadastrar empresa')</script>";
            print"<script> location.href='?page=novo';</script>";
        }
    }






    }