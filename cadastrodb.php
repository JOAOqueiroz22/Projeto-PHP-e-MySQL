<?php

$usuario= 'root';
$senha = '';
$database = 'cadastro';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $senha, $database) or die("ERROR");

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];
    $query = mysqli_query($conn, "INSERT INTO dbcadastro (email, senha, confirmar) VALUES ('$email', '$senha', 
    '$confirmar')");
    echo "LOGIN CRIADO COM SUCESSO";
    header("Location: login.php");
}




?>