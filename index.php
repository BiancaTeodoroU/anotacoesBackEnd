<?php
$display = 'none';
if (isset($_GET['errors'])) {
    $errors = json_decode($_GET['errors']);
}

if (isset($_GET['success'])) {
    $success = json_decode($_GET['success']);
}
?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Desenvolvimento web back-end</title>
</head>

<body>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>

    <body>
        <div class="container mx-auto bg-light mt-1 w-90">
            <header class="row">
                <div class="col-sm-9">
                    <h1>Cadastro</h1>
                </div>
            </header>
            <article class="col-12">
                <form action="processa_form.php" method="post">
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input class="form-control" placeholder="Digite seu nome" type="text" id="nome" name="nome"
                                value="<?php if (isset($errors) && isset($errors->nome))
                                     echo $errors->nome ?>"
                                required><br>
                        </div>
                        <div style="color: red;">
                            <?php
                        if (isset($errors) && isset($errors->nomeError)) {
                            echo $errors->nomeError;
                        }
                        ?>
                        </div>
                    </div class="col-sm-10">
                    <div class=" form-group row">
                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="E-mail" name="email" class="form-control" placeholder="Digite seu email"
                                id="email"
                                value="<?php if (isset($errors) && isset($errors->email))
                                    echo $errors->email ?>"
                                required><br>
                        </div>
                        <div style="color: red;">
                            <?php
                        if (isset($errors) && isset($errors->emailError)) {
                            echo $errors->emailError;
                        }
                        ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mensagem" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" id="senha" class="form-control" placeholder="Digite sua senha"
                                name="senha" required><br>
                        </div>
                        <div style="color: red;">
                            <?php
                        if (isset($errors) && isset($errors->senhaError)) {
                            echo $errors->senhaError;
                        }
                        ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mensagem" class="col-sm-2 col-form-label">Confirme sua senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Confirme sua senha"
                                name="confirmacao_senha" id="confirmacao_senha">
                        </div>
                        <div style="color: red;">
                            <?php
                        if (isset($errors) && isset($errors->confirmaError)) {
                            echo $errors->confirmaError;
                        }
                        ?>
                        </div>
                    </div>
                    <?php
            if (isset($_GET['success'])) {
            ?>

                    <div class="alert alert-success">
                        <b>Os dados abaixo foram recebidos com sucesso!<br>
                            Nome:
                            <?php if (isset($success) && isset($success->nome))
                    echo $success->nome ?> <br>
                            Email:
                            <?php if (isset($success) && isset($success->email))
                    echo $success->email ?> <br>
                            Senha:
                            <?php if (isset($success) && isset($success->senha))
                    echo $success->senha ?> <br>
                    </div>

                    <?php } ?>

                    <div style="padding-bottom: 1rem;">
                        <button type="submit" class="btn btn-info">Enviar</button>
                        <a href="lista_users.php" class="btn btn-success float-right">Lista de usuários</a>
                    </div>
                </form>
            </article>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" </html>