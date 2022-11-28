<?php
session_start();
include('conexao.php');


if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index2.php');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$sql = "select * from usuario where email = '{$email}' and senha = '{$senha}' limit 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    $_SESSION['usuario'] = $usuario;
    if(isset($_POST['salvarinformacoes'])){
        $hour = time() + 3600 * 24 * 30;
        setcookie('usuario', json_encode($usuario), $hour);
    }else{
        setcookie ("usuario", "", time() - 3600);
    }
    header('Location: painel.php');
    exit();
}else{
    header('Location: index2.php?failedlogin=1');
    exit();
}
