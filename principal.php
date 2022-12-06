<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

   
    <div id="conteudo">
    
        <a href='?pg=jogos'><img src="imagens/pokemonbanner.png" class="pokemon texto-hover">
        <label class='texto'>JOGOS</label></a>
        <a href="?pg=filmes"><img src="imagens/coralinebanner.jpg" class="coraline texto-hover"><label class='texto2'>
            FILMES
        </label></a>
        <a href="?pg=animes"><img src ="imagens/saobanner.png" class="sao texto-hover">
        <label class="texto">ANIMES</label></a>
        <a href="?pg=series"><img src="imagens/stbanner.jpg" class="st texto-hover">
        <label class="texto2">SÉRIES</label></a>



</div>
        
