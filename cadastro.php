<?php
    session_start();

    if(isset($_SESSION["user"]) && is_array($_SESSION["user"])){
        $adm = $_SESSION["user"][1];
        $nome = $_SESSION["user"][0];
    }else{
        echo "<script>window.location = '../index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilo2.css" rel="stylesheet">
    <title>Projeto Agenda</title>
</head>
<body>
    <header>         
        <img src="../logo-cmp-icon-2.png" id="logo">

    </header>
    <div class="container">
        <div class="box">
            <?php
            if($adm == 1):?> 
            <div id="cad">
                <form name="marcarReuniao" method="post" action="dados.php">         
                    <div class="container2">
                        <div class="clock"></div>
                    </div>      
                    <div id="dataAtual"></div>
                    <input type="text" name="nome" id="nome"required placeholder="Nome">

                    <input type="date" name="data" id="data"required placeholder="Data">

                    <input type="time" name="hora" id="hora" required placeholder="Hora">

                    <input type="text" name="link" id="link"required placeholder="Link">


                    <select name="local" id="local" required>
                        <option>Selecione...</option>
                        <option value="Sala Cinza">Sala Cinza</option>
                        <option value="Sala Azul">Sala Azul</option>
                        <option value="Auditorio">Auditorio</option>
                    </select>

                    <input type="text" name="adicional" id="adicional" placeholder="Observação">

                    <input type="submit" id="Marcar" name="marcar" id="marcar">
                    <?php
                    endif;?>
                    <button onclick="voltar()">Voltar</button>
                </form>

            <script>
                  function voltar(){      
                        window.history.back(-1);
                  
            }
            </script>

            <script src="../script.js"></script>
            </div>
        </div>
    </div>
</body>
</html>