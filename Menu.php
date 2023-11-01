<?php
    session_start();

    if(isset($_SESSION["user"]) && is_array($_SESSION["user"])){
        $adm = $_SESSION["user"][1];
        $nome = $_SESSION["user"][0];

    }else{
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
    <title>Pesquisar</title>
</head>
<body>
    <header>         
        <img src="../logo-cmp-icon-2.png" id="logo">
    </header>

    <div class="container">
            <div class="box">
                <div id="Menu">
                    <div class="wrapper">
                        <svg>
                            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                                Grupo CMP
                            </text>
                        </svg>
                    </div>
                    <div id="b">
                        
                        <form name="marcarReuniao" method="post" action="../Pesquisa/pesquisa.php">
                            <button id="Marcar" name="marcar">Pesquisar por todas reuniões</button>
                        </form> 
                        
                        <form name="marcarReuniao" method="post" action="../Pesquisa/pesquisarData.html">
                            <button id="Marcar1" name="marcar1">Pesquisar reunião por Data</button>
                        </form>
                        
                        <form name="marcarReuniao" method="post" action="../Pesquisa/pesquisarNome.html">
                            <button id="Marcar" name="marcar2">Pesquisar reunião por Nome</button>
                        </form>

                        <?php
                            if($adm == 1):?>
                             <form name="menuadm" method="post" action="Menu3.php">
                                <button id="Marcar" name="marcar2">ADM</button>
                            </form>
                        <?php
                            endif;?>
                        
                        <button onclick="sair()">Sair</button>                        
                        <button onclick="voltar()">Voltar</button>
                        
                        <script>
                        function voltar(){      
                        window.history.back(-1);
              
                        }
                        </script>
                       <script type="text/javascript" src="../script.js"></script>  
                    </div>
                </div>
              
            </div>
    </div>
</body>