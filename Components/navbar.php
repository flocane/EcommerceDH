<nav class="navbar navbar-expand-lg navbar-light ml-4  border-bottom border-secondary ">


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>


  <a class="navbar-brand font-weight-bolder" href="#"><img class="mr-4" src="img/layout/iron.png"   width= "60" height="60"  alt="" >Lavadero Lava Bien</a>
<div class="collapse navbar-collapse" id="navbarNav"> 

  <ul class="navbar-nav">
  
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="productPage.php">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contacto.php">Contacto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="FAQ.php" >Sobre Nosotros</a>
    </li>
    <?php if (isset($_SESSION["name"])) {?>
      <li class="nav-item">
          Bienvenido/a: <?=$_SESSION["name"];?>
      <a class="nav-item" href="logout.php"> Logout</a>
      </li>
      <?php } ?>
      </li>
    <?php if (empty($_SESSION)){?>
      <li class="nav-item">
        <a class="nav-link" href="registro.php" >Registrate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" >Ingresa</a>
      </li>

    <?php } ?>
  </ul>
</div>
</nav>