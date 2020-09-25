<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Listagem de Produtos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="./Crud básico em PHP/stilo.css">

</head>

<body>

  <div class="container">

    <h3 style="margin-top: 40px; margin-left:400px;">Lista de produtos</h3>


    <table class="table" style="margin-top: 50px;">
      <thead>
        <tr>
          <th scope="col">Nro Produto</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Ação</th>

        </tr>
      </thead>

      <?php
      include './conexao.php';
      $sql = "SELECT * FROM `estoque`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {

        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];

      ?>
        <tr>

          <td><?php echo $nroproduto ?></td>
          <td><?php echo $nomeproduto ?></td>
          <td><?php echo $categoria ?></td>
          <td><?php echo $quantidade ?></td>
          <td><?php echo $fornecedor ?></td>

          <td>
            <a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
            
            <a class="btn btn-danger btn-sm" style="color: #fff;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-trash-alt"></i>&nbsp;Deletar</a>
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