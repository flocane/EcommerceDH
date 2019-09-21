<?php
include_once("controllers/loader.php");
if ($_POST) {
  $errores =validar($_POST);
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
  <!-- <div class="container"> -->
  <ul>
      <?php
        if(isset($errores)){
          foreach ($errores as $key => $value) :?>
            <li class="alert alert-danger"><?=$value;?> </li>
          <?php endforeach;
        }
      ?>
<div class="container-fluid px-0">
  <?php include_once('Components/navbar.php'); ?>
<br>
<div class="container ">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="well well-sm mt-5">
                <form class="form-horizontal" action="" method="POST">
                    <fieldset>
                        <legend class="text-center header">Formulario de Contacto</legend>
                        <div class="form-group"> <!-- Nombre -->
                        <label for="full_name_id" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Ingresar Nombre">
                        </div>
                        <div class="form-group"> <!-- Apellido -->
                        <label for="apellido" class="control-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" name="apellido" placeholder="Ingresar Apellido">
                        </div>
                        <div class="form-group"> <!-- Domicilio -->
                            <label for="domicilio" class="control-label">Domicilio</label>
                            <input type="text" class="form-control" id="Domicilio" name="domicilio" placeholder="Ingresar su Domiclio">
                        </div>
                        <div class="form-group"> <!-- Telefono -->
                            <label for="telefono" class="control-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresar numero telefonico de Conctato">
                        </div>
                        <div class="form-group"> <!-- E-mail -->
                            <label for="email" class="control-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar numero e-mail de Conctato">
                        </div>
                        <div class="form-group"> <!-- Ciudad-->
                            <label for="ciudad" class="control-label">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad o Localidad">
                        </div>
                        <div class="form-group"><!-- Contacto-->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon">Contacto</i>
                            </span>
                        <div class="col-md-8"> <!-- Ingresar la Consulta-->
                            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese la consulta." rows="7"></textarea>
                        </div>
                        <div class="form-group"> <!-- Boton de Enviar-->
                          <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                          </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once('Components/footer.php'); ?>