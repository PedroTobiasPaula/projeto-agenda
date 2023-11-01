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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Agenda</title>
    <link href="../estilo2.css" rel="stylesheet">

</head>
<body>
        
    <header>
                 
        <img src="../logo-cmp-icon-2.png" id="logo">
    </header>

    <div class="container">                       
        <div class="box">
            <h3>Bem vindo ao Menu para administradores<h3>
             <div id="b">
             <?php
                echo $adm;
                if($adm == 1):?>
                <form name="marcarReuniao" method="post" action="Menu.php">
                    <button id="Marcar" name="marcar">Pesquisar</button>
                </form>
        
                <form name="excluirReuniao" method="post" action="excluir.php">
                    <button id="Marcar" name="marcar2">Excluir Reunião</button>
                </form>

                <form name="alterUsuario" method="post" action="alterar.php">
                    <button id="alter" name="Alterar">Alterar Usuario</button>
                </form>
                <form name="alterUsuario" method="post" action="MenuLogin/CadastroUser1.html">
                    <button id="alter" name="Alterar">Criar Usuario</button>
                </form>

                <form name="alterUsuario" method="post" action="cadastro.php">
                    <button id="alter" name="cadastro">Cadastro</button>
                </form>
                         <button onclick="voltar()">Voltar</button>          
            </div> 
            <br></br>
            <div class="wrapper">
                <svg>
                    <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                        Grupo CMP
                    </text>
                </svg>
            </div>
            <?php
                endif;?>

            <script>
              function voltar(){      
                window.location.href = "Menu.php";
              
            }
            </script>
            <script> 

            function cadastro() {
            window.location.href = "cadastro.php";
            }
            </script>
            <script type="text/javascript" src="script.js"></script>   
           
        </div>
    </div>

</body>