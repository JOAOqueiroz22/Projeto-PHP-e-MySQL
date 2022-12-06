<?php

$usuario= 'root';
$senha = '';
$database = 'faleconosco';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $senha, $database) or die("ERROR");


if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$idade= $_POST['age'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereço'];
$area_texto = $_POST['comentario'];

$sql = "INSERT INTO dadosusuario (nome,
age, email, telefone, sexo, endereço, comentario)
VALUES ('$nome', '$idade', '$email', '$telefone', '$sexo', '$endereco',
'$area_texto')";

$insert = mysqli_query($conn, $sql);
}

if(!$insert){
    echo "Ocorreu erro no cadastro.
    <a href='?pg=faleconosco>Tente novamente</a>";
}else{
  include_once("cadasnovamente.php");
}

?>