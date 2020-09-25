<?php

include 'conexao.php';

$id = $_GET['id'];



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Formulário de Edição</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./Crud básico em PHP/stilo.css">
</head>

<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 150px;">
        <h1>Formulário de Edição</h1>
        <form action="_atualizar_categoria.php" method="post">

            <?php

            $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id_categoria = $array['id_categoria'];
                $nomecategoria = $array['nome_categoria'];

            ?>

                <div class="form-group">
                    <label>Nome categoria</label>
                    <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria?>">
                    <input type="text" class="form-control" name="id" value="<?php echo $id_categoria?>" style="display: none;">
                </div>
                <div style="text-align: right;">
                    <button type="submit" id="botao" class="btn  btn-sm">Atualizar</BUtton>
                </div>

            <?php } ?>

        </form>
    </div>


</body>

</html>