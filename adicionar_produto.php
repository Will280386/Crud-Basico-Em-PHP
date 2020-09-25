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
        <h1>CADASTRAR PRODUTO</h1>
        <form action="_inserir_produto.php" method="post">
            
        <div class="form-group">
                <label>Nro do Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" name="categoria" autocomplete="off" required>

                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];

                    
                ?>

                    <option><?php echo $nome_categoria ?></option>

                <?php } ?>   
                </select>
            </div>
            
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Fornecedor</label>
                <select class="form-control" name="fornecedor" autocomplete="off" required>

                <?php
                
                include 'conexao.php';
                $sql2 = "SELECT * FROM fornecedor";
                $buscar2 = mysqli_query($conexao,$sql2);
                
                while ($array2 = mysqli_fetch_array($buscar2)) {
                    
                    $id_fornecedor = $array2['id_forn'];
                    $nome_fornecedor = $array2['nome_forn'];
                ?>
                

                    <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>
                
                </select>
            </div>
            <div style="text-align: right;">
                
                <a href="index.php" role = "button"  id="botao" class="btn btn-sm">Voltar</a> 
                <button type="submit" id="botao" class="btn  btn-sm">Eviar</BUtton>
                 
            </div>
        </form>
       
             
        
    </div>


</body>

</html>