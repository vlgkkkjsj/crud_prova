<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Systec</title>
    <link rel="icon" href="icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous" defer></script>



</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style= "cursor: default;">Systec</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?page=home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">Nova peça</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">Listar</a>
      </li>
    </ul>
  </div>
</nav>

<?php
    include('conexao/db.php');
    switch(@$_REQUEST["page"])
    {
      case "home":
        print "<script>alert('Logado na pagina de crud')</script>";
        print ("Bem vindo a pagina de crud da empresa SYSTEC, acreditamos que voce seja um administrador, logo converse com seu supervisor para saber o que deve ser feito");
        break;
      case "novo" :
          include("nova_peca.php");
          break;
      case "salvar":
        include("salvar.php");
        break;
      
      case "listar":
        include("listar.php");
        break;

      case "editar":
        include("editar.php");
        break;
    } 


?>

</body>
</html>