<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: painel.php');
}
$email = '';
$senha = '';

if(isset($_COOKIE['usuario'])){
    $usuario = json_decode($_COOKIE['usuario']);
    $email = $usuario->email;
    $senha = $usuario->senha;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container mx-auto bg-light mt-4 w-80"
        style="max-width: 550px; box-shadow: rgba(0, 0, 0, 0.24) 0px 8px 15px;">
        <header class="row">
            <div class="col-sm-10">
                <h1>Login</h1>
            </div>
        </header>
        <article class="col-12">
            <?php
            if (isset($_GET['failedlogin'])):
            ?>
            <div style="color: red;">
                ERRO: Usuário ou senha inválidos.
            </div>
            <?php
            endif;
            ?>
            <form action="login.php" method="post">
                <div class="row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="E-mail" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Digite seu email" id="email"
                            required><br>
                    </div>
                </div>
                <div class="row">
                    <label for="mensagem" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" id="senha" value="<?php echo $senha ?>" class="form-control" placeholder="Digite sua senha"
                            name="senha" required><br>
                    </div>
                </div>
                <div class="form-group row mx-1">
                    <span class="col-sm-2">&nbsp;</span>
                    <input type="checkbox" <?php if(isset($_COOKIE['usuario'])) echo 'checked' ?> value="1" name="salvarinformacoes">
                    <label for="dados_user" style="margin-left: 5px; margin-bottom: 0;">Salvar dados de acesso</label>
                </div>
                <div style="margin-left: 90px;">
                    <button type="submit" class="btn btn-info" value="LOGAR" style="margin-bottom:10px;">Entrar</button>
                </div>
                <div class="form-group row mx-1">
                    <div class="col-12 col-sm-10 mb-4">
                        <span class="obligatory--warnings">* Campos obrigatórios.</span><br>
                        <a href="index.php">Cadastrar novo Usuário</a>
                    </div>
                </div>
            </form>
            <footer class="row">
                <div class="col-12">
                    <p>Copyright © 2022</p>
                </div>
            </footer>
        </article>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy">
</body >
</html >