<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>COMPRAR</title>
    <script type="text/javascript"> 
      function mensagem(){
        alert("SEUS DADOS FORAM SALVOS COM SUCESSO, OBRIGADO PELA PREFENCIA!");
      }
    </script>
</head>
<body>

<?php
session_start();
    if(!isset($_SESSION["logado"]) ){
        header("Location: login.php");
    }
    $nome=$_SESSION["nome"];
?>

    <!-- BARRA DE NAVEGAÇÃO -->
    <nav class="navbar navbar-expand-lg " style="font-size:26px;" id="home">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="fotos/logo.png" alt="supercar" width="125" height="125" class="d-inline-block" >
            </a>   
          <strong>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php" style="color:#FFFFFF;">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" style="color:#FFFFFF;">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comprar.php" style="color:#FFFFFF;">CADASTRO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sair.php" style="color:#FFFFFF;">LOGOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true" ><?php echo "Olá, ".$nome?></a>
              </li>
            </ul>
          </strong>
        </div>
    </nav>
    <br><br>
    <h2>PARA COMPRAR UM DE NOSSOS VEICULOS, NEGOCIAR COM O VENDEDOR NO NUMERO (11)99288-4925 <BR> OU <BR> DEIXE SEUS DADOS, ETRAREMOS EM CONTATO ASSIM QUE POSSIVEL.</h2>
    <br>

    <!-- FORMULARIO CONTATO -->

<form method="get" action="comprar.php" >
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">NOME</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">EMAIL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">TELEFONE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">PRODUTO DE INTERESSE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="produto">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">DEIXE UMA SUGESTÃO</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sugestao">
    </div>
  </div>

    <br><br>
    
  <button onclick="mensagem()" type="submit" class="botao1"> SALVAR </button>

      <br><br><br><br>
  <?php
    if(isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["telefone"]) && isset($_GET["produto"]))
    {
        $nome=$_GET["nome"];
        $email=$_GET["email"];
        $telefone=$_GET["telefone"];
        $produto=$_GET["produto"]; 
        $sugestao=$_GET["sugestao"]; 


        $conexao=mysqli_connect("localhost","root","","supercar");
        $sql="INSERT INTO `contatos` (`nome`, `email`, `telefone`, `produto`, `sugestao`) VALUES ('$nome', '$email', '$telefone', '$produto', '$sugestao');";
        $resultado=(mysqli_query($conexao,$sql));

        mysqli_close($conexao); 
    }
  ?>


</body>
</html>


