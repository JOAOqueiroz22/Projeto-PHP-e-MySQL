<?php

$usuario= 'root';
$senha = '';
$database = 'cadastro';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $senha, $database) or die("ERROR");

if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo "Preencha seu email";
        }
            else if(strlen($_POST['senha']) == 0){
                echo "Preencha sua senha";
            }
            else{
                $email = $conn->real_escape_string($_POST['email']);
                $senha = $conn->real_escape_string($_POST['senha']);
                
                $sql_code = "SELECT * FROM dbcadastro WHERE email = '$email' AND senha = '$senha'";
                $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
                $quantidade = $sql_query->num_rows;

                if($quantidade == 2){
                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['email'] = $usuario['email'];
                    $_SESSION['nome'] = $usuario['nome'];
                    header("Location: index.php");
                }
                else{
                    echo "FALHA AO LOGAR";
                }

            }


}

?>
