<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>LOGIN</title>
</head>
<body>

<?php session_start(); 
if(isset($_SESSION["senha"]) && $_SESSION["nome"] && $_SESSION["email"]){
  $nome=$_SESSION["nome"];
  $senha=$_SESSION["senha"];
  $email=$_SESSION["email"];
}else{
$nome="Convidado";
}
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
                <a class="nav-link" href="cadastro.php" style="color:#FFFFFF;">CADASTRO</a>
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

    <br>

    <h2> BEM VINDO A PAGINA DE LOGIN, ESTAMOS FELIZES EM VE-LO NOVAMENTE </h2>

    <br>   

<!--TEXT BOX-->

<form method="get" action="login.php" >

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
    <label class="col-sm-2 col-form-label">SENHA</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="senha">
    </div>
  </div>

  <button type="submit" class="botao1" href="index.php">LOGIN</button>
</form>

<?php
    if(isset($_GET["email"]) && isset($_GET["senha"]) && isset($_GET["nome"]))
    {
        $nome=$_GET["nome"];
        $email=$_GET["email"];
        $senha=$_GET["senha"];
        $conexao = mysqli_connect("localhost","root","","supercar");
        $sql = "SELECT email, senha, nome FROM `clientes` WHERE email='$email' and senha='$senha' and nome='$nome';";
        $resultado = mysqli_query($conexao,$sql);
        if($linha = mysqli_fetch_array($resultado))
        {
            $_SESSION["logado"]=$senha;
            $_SESSION["nome"]=$nome;
            $_SESSION["email"]=$email;
            $_SESSION["senha"]=$senha;
            header("Location: index.php");

        } else {
            echo "CADASTRO NAO ENCONTRADO!";
        }

    }
?>

</body>
</html>