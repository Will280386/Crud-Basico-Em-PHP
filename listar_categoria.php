<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Listagem de Produtos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="./Crud básico em PHP/stilo.css">

</head>

<body>

  <div class="container">

    <h3 style="margin-top: 40px; margin-left:420px;">Lista de produtos</h3>


    <table class="table" style="margin-top: 50px;width:500px;margin-left:300px; ">
      <thead>
        <tr>
          <th scope="col">Nome da Categoria</th>
          <th scope="col">Opções</th>
        </tr>
      </thead>

      <?php
      include './conexao.php';
      $sql = "SELECT * FROM `categoria`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {

        $id_categoria = $array['id_categoria'];
        $nomecategoria = $array['nome_categoria'];

      ?>
        <tr>

          <td><?php echo $nomecategoria ?></td>
         

          <td>
            <a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
            
            <a class="btn btn-danger btn-sm" style="color: #fff;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fas fa-trash-alt"></i>&nbsp;Deletar</a>
          </td>

        <?php } ?>


        </tr>


    </table>
    <div style="text-align: right;">
      <a href="index.php" role = "button" style="background-color:#7EAAC3; color:#fff;" class="btn btn-sm">Voltar</a> 
    </div>
  </div>



</body>

</html>