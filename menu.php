<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./Crud básico em PHP/stilo.css">
</head>

<body>
    <center>
        <h4 style="margin-top:20px;font-family:'Roboto', sans-serif;">MENU ADMINISTRADOR</h4>
    </center>
    <div class="container" style="margin-top: 100px;">
        <div class="row">

            <div class="col-sm-6">
                <div class="card" style="background-color: lightgray;">
                    <div class="card-body">
                        <h5 class="card-title">Adcionar Produto</h5>
                        <p class="card-text">Adcione produtos em nosso estoque.</p>
                        <a href="adicionar_produto.php" class="btn btn-primary">Add. Produto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="background-color: lightgray;">
                    <div class="card-body">
                        <h5 class="card-title">Lista de produtos</h5>
                        <p class="card-text">Visualise o seu esoque e gerencie</p>
                        <a href="listar_produtos.php" class="btn btn-primary">Gerenciador de estoque</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card" style="background-color: lightgray;">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Categoria</h5>
                        <p class="card-text">Adicione categoria no estoque.</p>
                        <a href="adicionar_categoria.php" class="btn btn-primary">Add. Produto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card" style="background-color: lightgray;">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Fornecedor</h5>
                        <p class="card-text">Adcione novos fornecedores</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-primary">Gerenciador de estoque</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card" style="background-color: lightgray;">
                    <div class="card-body">
                        <h5 class="card-title">Aprovar Usuários</h5>
                        <p class="card-text">Aprovar usuários cadastrados</p>
                        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
