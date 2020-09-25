<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>Tela de login</title>
    <link rel="stylesheet" href="css/bootstrap.css">


    <style type="text/css">
        #tamanho {
            width: 350px;
            margin-top: 100px;
            -webkit-box-shadow: 10px 10px 36px -8px rgba(156, 156, 156, 0.7);
            -moz-box-shadow: 10px 10px 36px -8px rgba(156, 156, 156, 0.7);
            box-shadow: 10px 10px 36px -8px rgba(156, 156, 156, 0.7);
        }

    </style>

</head>

<body>

    <div class="container" id="tamanho" style="border-radius: 10px; border: 2px solid #f3f3f3">
        <div style="padding: 10px;">
            <center>
                <img src="imagem/cadeado.png" alt="cadeado" width="125px" height="125px">
            </center>
            <form>
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuário" class="form-control" placeholder="Usuário" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="usuário" class="form-control" placeholder="Senha" autocomplete="off" required>
                </div>
            </form>
            <div style="text-align: right;">
                <button type="submit" class="btn btn-sm btn-success">Entrar</button>
            </div>

        </div>
    </div>
    <div style="margin-top:10px;">
        <center>
            <small>Você não possui cadastro?<a href="cadastro_usuario_externo.php">Aqui</a></small>
        </center>
    </div>
</body>

</html>
