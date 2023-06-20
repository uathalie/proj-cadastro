<html>
    <head>
        <title>Bem vindo!</title>

        <link rel="stylesheet" href="index.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital@1&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php

        $login_cookie = $_COOKIE['login'];

        if(isset($login_cookie)){
            echo "Bem vindo, $login_cookie!<br>";
            echo "Essas informações podem ser acessadas por você.";
        }else{
            echo "Bem vindo, convidado<br>";
            echo "Essas informações NÃO PODEM ser acessadas por você.";
            echo "<br><a href='login.html'>Faça login</a> para ler o conteúdo.";
        }
        ?>
    </body>
</html>