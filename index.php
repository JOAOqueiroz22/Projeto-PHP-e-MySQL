
    <head>
        <title>Geek Info</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/tudo.css">
    </head>
    <?php
    include_once('topo.php');
    ?>

    <?php
       
       if(empty($_SERVER["QUERY_STRING"])){
           $var = "principal.php";
           include_once("$var");
       }
       else{
           $pg = $_GET['pg'];
           include_once("$pg.php");
       }
       include_once("rodape.php");  
       
       ?>