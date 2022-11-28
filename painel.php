<?php
include('verifica_login.php');

$display = 'none';
if (isset($_GET['errors'])) {
    $errors = json_decode($_GET['errors']);
}

if (isset($_GET['success'])) {
    $success = json_decode($_GET['success']);
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
        <article class="col-12 pt-4">
            <?php
            if (isset($_GET['success'])):
            ?>
            <div style="color: green;">
                USUÁRIO EDITADO!
            </div>
            <?php
            endif;
            ?>
            <form method="post">
                <div class="row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['usuario']['email'] ?>" class="form-control" disabled><br>
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input name="nome" value="<?php echo $_SESSION['usuario']['nome'];
                        if (isset($errors) && isset($errors->nome))
                            echo $errors->nome ?>" class="form-control" placeholder="Digite seu email" id="email"
                            required><br>
                    </div>
                    <div style="color: red;">
                        <?php
                        if (isset($errors) && isset($errors->nomeError)) {
                            echo $errors->nomeError;
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <label for="mensagem" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input id="senha" value="" class="form-control" placeholder="Digite sua senha" name="senha"
                            required><br>
                    </div>
                    <div style="color: red;">
                        <?php
                        if (isset($errors) && isset($errors->senhaError)) {
                            echo $errors->senhaError;
                        }
                        ?>
                    </div>
                </div>

                <div style="margin-left: 90px;">
                    <button type="submit" formaction="editar.php" class="btn btn-info" value="LOGAR">EDITAR</button>
                    <button type="submit" formaction="deletar_usuario.php" class="btn btn-danger">EXCLUIR</button>
                    <a class="btn btn-warning" href="logout.php">Sair</a>
                </div>
            </form>
            <footer class="row" style="padding-top: 1rem;">
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