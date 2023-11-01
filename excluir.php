
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
      <link href="../estilo2.css" rel="stylesheet" type="text/css">
      <title>pesquisa</title>
</head>
<body>
      <header>         
            <img src="../logo-cmp-icon-2.png" id="logo">
        </header>

      <div class="container">
            <div class="box">
                  <?php
                  if($adm == 1):?>
                  <h3>Digite o código da reunião que deseja excluir</h3>
                  <form name="marcarReuniao" method="post" action="excluirReunião.php">
                  <div id= 'ex'>      
                  <input type="text" id="code" name="code" placeholder="Código da Reunião">
                  </div>      
                  <button id="Marcar" name="marcar">Excluir</button>
                  </form>

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


            $sql = "SELECT local,data,hora,nome,codReuniao,link,adicional FROM reuniao";
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
                  <?php
                endif;?>
      </div>
      <button onclick="voltar()">Voltar</button>
      <script>
            function voltar(){      
                  window.location.href = "Menu3.php";
            }
      </script>
            </div>
      </div>
</body>
</html>
