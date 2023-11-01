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
      <link rel="stylesheet"  type="text/css" href="../estilo2.css" media="screen">
      <title>pesquisa</title>
      <style>
            .box{
                  height:800px;
                  width: 800px;
                  margin-top: 5%;
            }
      </style>
</head>
<body>
      <header>         
      <img src="../logo-cmp-icon-2.png">
      <div class="top">

        </form>     
      </div>
    </header>
      <div class="container"> 
            <div class="box">
                  <div id="container3">
                        <div id="1">
                        <?php
                        if($adm == 1):?>
                              <form name="marcarReuniao" method="post" action="alterarPrioridade.php">
                                    <input type="text" id="code" name="code" placeholder="Codigo" required>
                                    <select name="pri" id="pri" required>
                                    <option>Selecione...</option>
                                          <option value="0">Usuário</option>
                                          <option value="1">Administrador</option>
                                    </select>
                                          <button id="Marcar" name="marcar">Alterar</button>
                              </form>
                        </div>
        
                        <div id="2">
                              <form name="marcarReuniao" method="post" action="Senha.php">
                                    <input type="text" id="code" name="code" placeholder="Codigo">
                                    <input type="text" id="senha" name="senha"placeholder="Nova Senha">
                                    <button id="Marcar" name="marcar">Alterar</button>
                              </form>
                        </div>
      
                        <div id="3">    
                              <form name="marcarReuniao" method="post" action="Email.php">
                                    <input type="text" id="code" name="code" placeholder="Codigo">
                                    <input type="text" id="email" name="email"placeholder="Novo Email">
                                    <button id="Marcar" name="marcar">Alterar</button>
                              </form>
                        </div>
      
                        <div id="4">    
                              <form name="marcarReuniao" method="post" action="Nome.php">
                                    <input type="text" id="code" name="code" placeholder="Codigo">
                                    <input type="text" id="Nome" name="Nome"placeholder="Novo Nome">
                                    <button id="Marcar" name="marcar">Alterar</button>
                              </form>
                        </div>
                  </div>
      <div class=main>
      <table border="1" style='width:50%'>
      <tr>
      <th>NOME</th>
      <th>EMAIL</th>
      <th>SENHA</th>
      <th>PRIORIDADE</th>
      <th>CÓDIGO</th>
      </tr>



      <?php
            $servername = "localhost";
            $database = "agenda";
            $username = "root";
            $password = "";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
      }


            $sql = "SELECT Nome,Email,Senha,Prioridade,cod FROM user";
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
            
            // Obtendo os dados por meio de um loop while
            while ($registro = mysqli_fetch_array($resultado))
            {
              $nome = $registro['Nome'];
              $email = $registro['Email'];
              $prioridade = $registro['Prioridade'];
              $senha = $registro['Senha'];
              $cod = $registro['cod'];

              echo "<tr>";
              echo "<td>".$nome."</td>";
              echo "<td>".$email."</td>";
              echo "<td>".$senha."</td>";
              echo "<td>".$prioridade."</td>";
              echo "<td>".$cod."</td>";
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
      <script src="script.js"></script>
      </div>
      </div>
</body>
</html>
