<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Adcionar Categoria</title>
</head>

<body>

    <div class="container" style="margin-top: 40px;width: 500px">
        <h4>Cadastro de fornecedor</h4>

        <form action="_inserir_fornecedor.php" method="post">

            <label>Fornecedor</label>
            <div class="form-group">
                <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor" autocomplete="off">
            </div>

            <div style="text-align: right;">
                
            <a href="index.php" role = "button" style="background-color: #FC8078;color:#fff"  id="botao" class="btn btn-sm">Voltar</a> 
        
            <button type="submit" class="btn btn-primary btn-sm">
                    Adcionar
                </button>
            </div>
        </form>


    </div>

</body>

</html>