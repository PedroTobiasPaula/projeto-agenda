<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="estilo2.css" rel="stylesheet">
      <title>Cadastro</title>
</head>
<body>
      <div class=main>
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
 
            echo "<br>Connected successfully</br>";

            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $hora = $_POST['hora'];
            $local = $_POST['local'];
            $link = $_POST['link'];
            $adicional = $_POST['adicional'];
    
            #echo"
            #$nome
            #$data
            #$hora
            #$local
            #$link
            #$adicional";

            $sql = "INSERT INTO `reuniao` ( `local` , `data` , `hora` , `nome` , `codReuniao` , `link` , `adicional`) VALUES ('$local', '$data', '$hora', '$nome', NULL , '$link', '$adicional')";
            if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
      ?>
      <script>
           var ret = window.confirm("Reunião marcada com sucesso. Aperte ok para cadastrar outra reunião.");
           
            if(ret == true){
              window.location.href = "cadastro.php";  
            };
            
            if(ret == false){
              window.location.href = "../index.php";  
            };
      </script>
      </div>
</body>
</html>
