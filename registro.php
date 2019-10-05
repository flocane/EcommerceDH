<?php
include_once("controllers/loader.php");
if ($_POST){
  $user = new User($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password']);

  $errores=$validator->validateInput($_POST);
    if(count($errores)==0){
      $userfind = $db->search($user->getEmail());

      if($userfind != false){
        $errores["email"]="Usuario ya registrado";
      }else{
        $avatar = $factory->createAvatar($_FILES);
        $userArray=$factory->create($user,$avatar);
        $db->save($userArray);
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
    <?php  include_once 'Components/navbar.php' ?>
<br>
<br>
<br>
<?php if(isset($errores)):
      echo "<ul class='alert alert-danger text-center'>";
      foreach ($errores as $key => $value) :?>
        <li><?=$value;?> </li>
        <?php endforeach;
      echo "</ul>";
      endif;?>
    <?php 
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Formulario de Registro de Usuarios</legend>
                        <div class="form-group"> <!-- Nombre -->
                            <label for="full_name_id" class="control-label">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Ingresar Nombre">
                        </div>
                        <div class="form-group"> <!-- Apellido -->
                         <label for="apellido" class="control-label">Apellido</label>
                         <input type="text" class="form-control" id="Apellido" name="apellido" placeholder="Ingresar Apellido">
                        </div>
                        <div class="form-group"> <!-- Usuario -->
                            <label for="usuario" class="control-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresar Nombre de Usuario">
                        </div>
                        <div class="form-group"> <!-- E-mail -->
                            <label for="email" class="control-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar numero e-mail de Conctato">
                        </div>
                        <div class="form-group"> <!-- Password -->
                            <label for="password" class="control-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar Contraseña del usuario">
                        </div>
                        <div class="form-group"> <!--Confirmacion de Password -->
                            <label for="repassword" class="control-label">Confirmar Contaseña</label>
                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Ingresar Confirmacion de Contraseña del usuario">
                        </div>
                        </div>
                        <div class="form-group"> <!-- Boton de Enviar Registro-->
                           <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg">Registrame</button>
                          </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once 'Components/footer.php'; ?>