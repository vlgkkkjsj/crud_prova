<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Peça</title>
    <link rel="stylesheet" href="indexEstilo.css">
</head>
<body>

<main class="conteudo">
    <section class="formulario">    
    <div >
        <h1 id="titulo-principal">Cadastro via sistema Administrativo</h1>
        <p id="subtitulo">Complete as informacoes da peça</p>
        <br>
    </div>

    <form class="formulario" method="POST" action="?page=salvar">
        <input type="hidden" name="acao" value="cadastrar">
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