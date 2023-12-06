<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php 
            include "conexao.php";
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];
            $sql = "UPDATE  `pessoas`  set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento' WHERE id = $id";
            
            if ( mysqli_query($conn, $sql) ) mensagem("$nome alterado com sucesso!",'success');
            else mensagem("$nome NÃO alterado!",'danger');
           ?>
           <hr>
           <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>      
      </div>
    </div>
  </body>
</html>