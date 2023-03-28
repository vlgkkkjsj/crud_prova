<?php

 switch(@$_REQUEST["acao"])
    {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $fabricante = $_POST['fabricante'];
            $descricao = $_POST['descricao'];
            $quantidade = $_POST['quantidade'];

        if(empty($nome)or empty($fabricante) or empty($descricao) or empty($quantidade))
        {
            print "<script>alert('insira todas as informacoes ')</script>";
            print "<script>location.href='?page=novo'</script>";
        }
        else
        {
            $sql = "INSERT INTO nova_peca (nome,fabricante,descricao,quantidade) values ('{$nome}','{$fabricante}','{$descricao}','{$quantidade}')";
            $res = $conn-> query($sql);
    
            if($res== true)
            {
                print "<script> alert('Cadastro realizado com sucesso')</script>";
                print "<script> location.href='?page=listar';</script>";
            }
            else
            {
                 print "<script> alert('erro ao cadastrar usuario')</script>";
            }
        }
            break;
            
        case 'editar':
            $nome = $_POST['nome'];
            $fabricante = $_POST['fabricante'];
            $descricao = $_POST['descricao'];
            $quantidade = $_POST['quantidade'];

            if(empty($nome)or empty($fabricante) or empty($descricao) or empty($quantidade))
        {
            print "<script>alert('insira todas as informacoes ')</script>";
            print "<script>location.href='?page=novo'</script>";
        }

        else{
            $sql = "UPDATE nova_peca SET 
            nome = '{$nome}',
            fabricante = '{$fabricante}',
            descricao = '{$descricao}',
            quantidade = '{$quantidade}'
    
            where id =".$_REQUEST["id"];
         $res = $conn->query($sql);

        if($res == true)
        {
            print "<script> alert('Editado com sucesso!!! ')</script>";
            print"<script>  location.href='?page=listar';</script>";
        }
        else
        {

            print"<script>alert('Erro ao editar o usuario')</script>";
        }
        }
    
            break;
        case 'excluir':
                $sql = "DELETE FROM nova_peca WHERE id=" .$_REQUEST["id"];

                $res = $conn -> query($sql);

                if($res== true) 
                {
                    print "<script> alert('Usuario deletado com sucesso')</script>";
                    print "<script> location.href='?page=listar';</script>";
                }
                else{
                    print "<script> alert('Falha ao deletar usuario')</script>";
                }
                break;
        }
    
      