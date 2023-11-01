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
      <link href="estilo2.css" rel="stylesheet" type="text/css">
      <title>pesquisa</title>
</head>
<body>

      <?php
            $servername = "localhost";
            $database = "agenda";
            $username = "root";
            $password = "";
            // Criar conexão
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Checar conexão
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
      }

            $code = $_POST['code'];
            $email = $_POST['email'];

            $sql = "UPDATE `user` SET `Email` = '$email' WHERE `user`.`cod` = '$code';";
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
           
?>
      <button onclick="voltar()">Voltar</button>
      <script>
            function voltar(){      
                  window.history.back(-1);
            }
      </script>
        <script>
           var ret = window.confirm("Email alterado com sucesso, aperte ok para alterar mais algum usuario.");
           
            if(ret == true){
              window.location.href = "alterar.php";  
            };
            
            if(ret == false){
              window.location.href = "Menu3.php";  
            };
        </script>
</body>
</html>
