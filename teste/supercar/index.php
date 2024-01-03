<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>SUPER CARS</title>
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

function comprar(){
  if($nome==$_SESSION["nome"]){
    header("location: comprar.php");
  }
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

    <br>

    <h2> SEJA BEM VINDO A SUPER CAR, AQUI VOCE ENCONTRA OS MELHORES CARROS! </h2>

    <br>   

<!-- 1ª LINHA DE CARTÕES -->
<div class="produtos">
  <div class="row row-cols-1 row-cols-md-5 g-6" id="supercarros">
    <div class="col">
      <div class="card">
        <img src="fotos/212.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> SKYLINE R34</h5>
          <p class="card-text"> MOTOR 6 CILINDROS BI-TURBO</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>   
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/350z.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">NISSAN 350Z</h5>
          <p class="card-text">teste nissan 350z.</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/supra.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">SUPRA MK4</h5>
          <p class="card-text">teste supra</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/dodge.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">DODGE CHALLENGER</h5>
          <p class="card-text">teste dodge challenger</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br>

<!-- 2ª LINHA DE CARTÕES -->
<div class="produtos">
  <div class="row row-cols-1 row-cols-md-4 g-6" id="esportivos">
    <div class="col">
      <div class="card">
        <img src="fotos/amg.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> AMG E63 S</h5>
          <p class="card-text"> teste amg e63 s</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/mustang.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">MUSTANG GT</h5>
          <p class="card-text">teste mustang gt</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/bmw.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BMW SERIES 5</h5>
          <p class="card-text">teste series 5</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/porsche.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">PORSCHE GT3RS</h5>
          <p class="card-text">teste porsche gt3rs</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
  </div>
</div>
<BR><BR><BR><BR><br><br><br><br>


<!-- 3ª LINHA DE CARTÕES -->
<div class="produtos">
  <div class="row row-cols-1 row-cols-md-4 g-6" id="classicos">
    <div class="col">
      <div class="card">
        <img src="fotos/opala.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> OPALA SS </h5>
          <p class="card-text">teste opala ss</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/chevette.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> CHEVETTE </h5>
          <p class="card-text">teste chevette.</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/maverick.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> MAVERICK GT </h5>
          <p class="card-text">teste maverick</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="fotos/corcel.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> FORD CORCEL GT</h5>
          <p class="card-text"> teste ford corcel gt</p>
          <form method='get' action='comprar.php'>
            <div>
              <input type='submit' value='COMPRAR'class="botao">
            </div>
          </form>  
        </div>
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br>

<footer>Desenvolvido por: Lucas Sanchez, Guilherme Voltolin, Enzo Costa e Kauã Simili.</footer>

<br><br>

</body>
</html>