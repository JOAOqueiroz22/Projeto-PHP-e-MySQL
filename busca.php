<?php
$usuario= 'root';
$senha = '';
$database = 'buscageek';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $senha, $database) or die("ERROR");

 


    $conteudo_geek = $_POST['conteudo_geek'];
    $result = "SELECT * FROM informacoes WHERE nome LIKE '%$conteudo_geek' OR  sinopse LIKE '%$conteudo_geek' ";
    $resultados_sites = mysqli_query($conn, $result);

        while($rows_informacoes = mysqli_fetch_array($resultados_sites)){
            echo "Sua busca: ".$rows_informacoes['nome']."<br>";
        }

?>