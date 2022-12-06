<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

<header> 
    <a href="?pg=principal"><img src="imagens/controle2.png" class="logo"></a>
    <form class="pesquisar" role="search" action="busca.php" method="POST">
        <input class="botao" type="search" placeholder="Pesquisar"  aria-label="Search" name="conteudo_geek">
        <button class="botao2" type="submit">Pesquisar</button>
      </form>
    <nav class="navegation">
   
    <h2 class= "pokemon ">Bem-vindo! <?php echo $_SESSION['email'];?></h2>
        <ul>
        
            <li><a href="?pg=principal">MENU</a></li>
            <li><a href="?pg=faleconosco">FALE CONOSCO</a></li>
              <li><a href="?pg=login"|>LOGIN</a></li>
        </ul>
    </nav>

</header>
