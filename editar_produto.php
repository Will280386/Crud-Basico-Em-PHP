<?php

include 'conexao.php';

$id = $_GET['id'];



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>CRUD Básico em PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./Crud básico em PHP/stilo.css">
</head>

<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 150px;">
        <h1>ALTERAR ESTOQUE</h1>
        <form action="_atualizar_produto.php" method="post">

        <?php

        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        $buscar = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($buscar)) {
          
            $id_estoque = $array ['id_estoque'];
            $nroproduto = $array ['nroproduto'];
            $nomeproduto = $array ['nomeproduto'];
            $categoria = $array ['categoria'];
            $quantidade = $array ['quantidade'];
            $fornecedor = $array ['fornecedor'];

        ?>
            
        <div class="form-group">
                <label>Nro do Produto</label>
                <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
            </div>
            
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>" >
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value = "<?php echo $quantidade ?>">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                </select>
            </div>
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn  btn-sm">Atualizar</BUtton>
            </div>

        <?php } ?>

        </form>
    </div>


</body>

</html>

