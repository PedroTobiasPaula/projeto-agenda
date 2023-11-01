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

            $sql = "DELETE FROM reuniao WHERE codReuniao = '$code'";
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
           
?>
      <button onclick="voltar()">Voltar</button>
      <script>
            function voltar(){      
                  window.history.back(-1);
            }
      </script>
        <script>
           var ret = window.confirm("Reunião excluida com sucesso, aperte ok pra excluir alguma reunião.");
           
            if(ret == true){
              window.location.href = "excluir.php";  
            };
            
            if(ret == false){
              window.location.href = "menu2.html";  
            };
        </script>
</body>
</html>
