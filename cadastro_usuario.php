<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./Crud básico em PHP/stilo.css">
</head>

<body>
    <div class="container" style="width: 400px; margin-top:100px;">

        <h4 style="font-family: 'Roboto', sans-serif; color:lightseagreen;">Cadastro de usuário</h4>
        <form action="_insert_usuario.php" method="post">
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu E- mail">
            </div>
            <div class="form-group">
                <label>Senha do usuário</label>
                <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <label>Repetir senha</label>
                <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repita sua senha" oninput="validaSenha(this)">
                <small>Precisa ser identica a senha digitada acima.</small>
            </div>
            <div class="form-group">
                <label>Nivel de Acesso</label>
                <select name="nivel_usuario" class="form-control">

                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>

                </select>
            </div>
            <div style="text-align: right;">
                <a href="menu.php" role="button" class="btn btn-sm btn-danger">Voltar</a>
                <button type="submit" class="btn btn-sm btn-sucess" style="background-color:lightseagreen;font-family: 'Roboto', sans-serif;color:#fff;">Cadastrar</button>


            </div>
        </form>
    </div>

    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }

    </script>

</body>

</html>
