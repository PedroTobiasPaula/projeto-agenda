<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet"  type="text/css" href="estilo2.css" media="screen">
</head>
<body>      
    
    <header>         
      <img src="logo-cmp-icon-2.png">
      <div class="top">
        <form name="login" method="post" action="MenuLogin/login.php"> 
          <input type="text" id="nameLogin" name="emailLogin" placeholder="Email"  required>
          <input type="password" id="'senhaLogin" name="senhaLogin" placeholder="Senha" required>        
          <button id="avancar" name="avancar">Avançar</button>
        </form>     
      </div>
    </header>
    <div class="container">
      <div class="box">  
    
    
        <table>
        <tr>
        <th>LOCAL</th>
        <th>DATA</th>
        <th>HORA</th>
        <th>NOME</th>
        <th>CÓDIGO</th>
        <th>LINK</th>
        <th>ADICIONAL</th>
        </tr>



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


            $sql = "SELECT local,date_format(data,'%d/%m/%Y') as data,hora,nome,codReuniao,link,adicional FROM reuniao WHERE DATE(data) = CURDATE()";
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
            
            // Obtendo os dados por meio de um loop while
            while ($registro = mysqli_fetch_array($resultado))
            {
              $local = $registro['local'];
              $data = $registro['data'];
              $hora = $registro['hora'];
              $nome = $registro['nome'];
              $cd = $registro['codReuniao'];
              $link = $registro['link'];
              $add = $registro['adicional'];



              echo "<tr>";
              echo "<td>".$local."</td>";
              echo "<td>".$data."</td>";
              echo "<td>".$hora."</td>";
              echo "<td>".$nome."</td>";
              echo "<td>".$cd."</td>";
              echo "<td>".$link."</td>";
              echo "<td>".$add."</td>";
              echo "</tr>";
            }
          ?>
      </div>
  </div>

</body>
</html>