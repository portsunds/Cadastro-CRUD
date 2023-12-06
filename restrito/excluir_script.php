<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Exclusão de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php 
            include "conexao.php";
            $id = $_POST['id'];
            $nome = $_POST['nome'];  
            $sql = "DELETE from  `pessoas`  WHERE id = $id";

            if (mysqli_query($conn, $sql)) mensagem("$nome excluido com sucesso!",'success');
            else mensagem("$nome NÃO excluido!",'danger');
           ?> 
           <hr>
           <a href="listar.php" class="btn btn-primary">Voltar</a>
        </div>      
      </div>
    </div>
  </body>
</html>