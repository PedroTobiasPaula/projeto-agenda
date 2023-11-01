<?php
    session_start();

    if(isset($_SESSION["user"]) && is_array($_SESSION["user"])){
        $adm = $_SESSION["user"][1];
        $nome = $_SESSION["user"][0];
        
    }
    
    else{
        echo "<script>window.location = 'index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="../estilo2.css" rel="stylesheet">
</head>
<body>
    <header>         
        <img src= "../logo-cmp-icon-2.png" id="logo">
    </header>
        <div class="container">
            <div class="box">
            <?php
            if($adm == 1):?>
                <div id="cad">
                    <h3>Bem vindo ao de cadastro de usuário</h3>
                    <form name="login" method="post" action="CadastroUser.php">
                        <input type="text" id="nameCad" name="nameCad" placeholder="Nome"  required>
                        <input type="text" id="'emailCad" name="emailCad" placeholder="Email" required>
                        <input type="password" id="'senhaCad" name="senhaCad" placeholder="Senha" required>
                        <div id="avancar">
                            <button id="avancar" name="avancar">Avançar</button>
                        </div>
                        </form>
                </div>
            <?PHP
            endif;?>
            </div>
        </div> 
</body>
</html>