<?php

    require("conexao.php");


    if(isset($_POST['email']) && isset($_POST["senha"]) && $conexao != null){
        
        $query = $conexao->prepare("SELECT * FROM usuario WHERE Email = ? AND Senha = ?");
        $query->execute(array($_POST['email'], $_POST['senha']));

        if($query->rowCount()){
            $user= $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["usuario"] = array($user['Nome'], $user['Adm']);

            echo "<script>window.location = 'Menu.html'</script>";
        }
        else{
            echo "<script>window.location = 'index.php'</script>";
        }
    }



?>