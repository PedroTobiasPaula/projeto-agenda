<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../estilo2.css" rel="stylesheet" type="text/css">
      <title>pesquisa</title>
</head>
<body>
      <div class=main>
      <table border="1" style='width:50%'>
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

            $dataa = $_POST['dataa'];

            $sql = "SELECT local,date_format(data,'%d/%m/%Y') as data,hora,nome,codReuniao,link,adicional FROM reuniao WHERE data = '$dataa'";
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
      <button onclick="voltar()">Voltar</button>
      <script>
            function voltar(){      
                  window.history.back(-1);
            }
      </script>
</body>
</html>
