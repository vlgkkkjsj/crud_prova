<?php

$sql = "SELECT * FROM nova_peca WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Registros</title>
    <link rel ="stylesheet" href="indexEstilo.css">
</head>
<body>

    <main class="conteudo">
    <section class="formulario">    
    <div >
        <h1 id="titulo-principal">Editar informações das peças</h1>
        <p id="subtitulo">Atualize as informacoes das peças</p>
        <br>
    </div>
    <form class="formulario" method="POST" action="?page=salvar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>" >
        <input type="hidden" name="acao" value="editar">
        <fieldset class="grupo">
        <div class="campo" >
                <label for="nome"><strong>Nome da peça</strong></label>
                <input type="text" name="nome" id="nome" >
            </div>

            <div class="campo">
                <label for="Sobrenome" ><strong>fabricante</strong></label>
                <input type="text" name="fabricante" id="fabricante">
            </div>

            <div class="campo">
                <label for="senha"><strong>descricao</strong></label>
                <input type=text name="descricao" id="tipo" >
            </div>
            <div class="campo">
                <label for="senha"><strong>quantidade</strong></label>
                <input type=text name="quantidade" id="tipo" >
            </div>

        
        </fieldset>
      <button class="botao" type="submit" name="submit">Concluir</button>
    </form>
</section>
    </main>
</body>
</html>