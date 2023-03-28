<h1 style= "color: white; text-align: center;" >Listar peças</h1>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="indexEstilo.css">
</head>
<body>
    
</body>
</html>


<?php
$sql = "SELECT * FROM nova_peca";

$res = $conn -> query($sql);

$qtd = $res -> num_rows;

if($qtd > 0 )
{
   print "<table class='table'>";
    print "<th>ID</th>";
    print "<th>nome</th>";
    print "<th>fabricante</th>";
    print "<th>descricao</th>";
    print "<th>quantidade</th>";
    
    while($row = $res->fetch_object() ){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->fabricante."</td>";
        print "<td>".$row->descricao."</td>";
        print "<td>".$row ->quantidade."</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='editar'>Editar</button>
                <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='excluir'>Excluir</button>
                </td>";
        print "</tr>";
        
    }
    print "</table>";
}else{
    print("<p class='alert alert-danger'>Nenhum cadastro encontrado!!!</p>");
}
