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
            $nameCad = $_POST['nameCad'];
            $emailCad = $_POST['emailCad'];
            $senhaCad = $_POST['senhaCad'];
            
            echo"
            $nameCad , $emailCad , $senhaCad";

            $sql = "INSERT INTO `user` ( `Nome` , `Email` , `Senha` , `Prioridade` , `cod`) VALUES ('$nameCad', '$emailCad', '$senhaCad', '1' , null)";
            if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
?>
<script>
           var ret = window.confirm("Cadastro feito com sucesso.");
           
            if(ret == true){
              window.location.href = "index.php";  
            };
            
            if(ret == false){
              window.location.href = "index.php";  
            };
</script>