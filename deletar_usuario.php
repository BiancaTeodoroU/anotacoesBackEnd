<?php
include('conexao.php');
session_start();
if(!$_SESSION['usuario']) {
	header('Location: index2.php');
	exit();
}

$id = $_SESSION['usuario']['id'];

$sql = "delete from usuario
where id = $id";

$result = $conn->query($sql);

if(isset($_COOKIE['usuario'])){
    setcookie ("usuario", "", time() - 3600);
}

session_destroy();
header('Location: index2.php');

