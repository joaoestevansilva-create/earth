<?php
session_start();
include '../includes/conexao.php';

if($_POST){

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = $conn->prepare("
SELECT *
FROM usuarios
WHERE usuario=?
");

$sql->bind_param("s",$usuario);
$sql->execute();

$result = $sql->get_result();

if($user = $result->fetch_assoc()){

if(password_verify($senha,$user['senha'])){

$_SESSION['admin']=true;

header("Location: dashboard.php");

}

}

}
?>