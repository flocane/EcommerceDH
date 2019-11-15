<?php
include_once("controllers/loader.php");
if ($_POST) {
  $user = new User($_POST['name'], $_POST['lastname'], $_POST['nickname'], $_POST['email'], $_POST['password']);

  $errores = $validator->validateInput($_POST);
  if (count($errores) == 0) {
    $userfind = $query->getUserByEmail($user->getEmail());

    if ($userfind != null) {
      $errores["email"] = "Usuario ya registrado";
    } else {
      if ($_FILES != null) {
        $avatar = $factory->createAvatar($_FILES);
        $user->setAvatar($avatar);
      }
      
      $query->registerUser($user);
      header("location:login.php");
      exit;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>e-commerce</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crete+Round|Josefin+Sans|Montserrat+Alternates" rel="stylesheet">
</head>

<body>
  <div class="container-fluid px-0">
    <?php include_once 'Components/navbar.php' ?>
    <br>
    <br>
    <br>
    <?php if (isset($errores)) :
      echo "<ul class='alert alert-danger text-center'>";
      foreach ($errores as $key => $value) : ?>
        <li><?= $value; ?> </li>
    <?php endforeach;
      echo "</ul>";
    endif; ?>
    <?php
    if (isset($errores)) : ?>
      <ul class="alert alert-danger">
        <?php
          foreach ($errores as $key => $value) : ?>
          <li> <?= $value; ?> </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="well well-sm">
            <form class="form-horizontal" method="post">
              <fieldset>
                <legend class="text-center header titulosgenerales">Formulario de Registro de Usuarios</legend>
                <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8">
                  <!-- Nombre -->
                  <label for="full_name_id" class="control-label"><strong>Nombre</strong></label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Ingresar Nombre">
                </div>
                <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8">
                  <!-- Apellido -->
                  <label for="apellido" class="control-label"><strong>Apellido</strong></label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingresar Apellido">
                </div>
                <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8">
                  <!-- Usuario -->
                  <label for="usuario" class="control-label"><strong>Usuario</strong></label>
                  <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Ingresar Nombre de Usuario">
                </div>
                <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8">
                  <!-- E-mail -->
                  <label for="email" class="control-label"><strong>E-mail</strong></label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar numero e-mail de Conctato">
                </div>
                <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8">
                  <!-- Password -->
                  <label for="password" class="control-label"><strong>Contraseña</strong></label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar Contraseña del usuario">
                </div>
                <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8">
                  <!--Confirmacion de Password -->
                  <label for="repassword" class="control-label"><strong>Confirmar Contaseña</strong></label>
                  <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Ingresar Confirmacion de Contraseña del usuario">
                </div>
          </div>
          <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8">
            <!-- Boton de Enviar Registro-->
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary btn-lg"><strong>Registrame</strong></button>
            </div>
          </div>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include_once 'Components/footer.php'; ?>
</body>