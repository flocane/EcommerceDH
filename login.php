<?php
include_once("controllers/loader.php");
if ($_POST) {
  $user = new user(null, null, null, $_POST["email"], $_POST["password"]);
  $errors = $validator->validate($user);
  if (count($errors) === 0) {
    $userfind = $query->getUserByEmail($user->getEmail());
    if ($userfind == null) {
      $errors['email'] = "Usuario no registrado";
    } else {
      if ($auth->validatePassword($user->getPassword(), $userfind["password"]) != true) {
        $errors['password'] = "Por favor Verifique los Datos";
      } else {
        Auth::setSession($userfind);
        if (isset($_POST['recordar'])) {
          Auth::setCookie($userfind);
        }
        if (Auth::validateUser()) {
          header("location:index.php");
        } else {
          header("location:registro.php");
        }
      }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css.map">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>
  <div class="container-fluid px-0">

    <?php include_once 'Components/navbar.php' ?>

    <section class="mt-4">
      <div class="col-12">
        <legend class="text-center header titulosgenerales">LOGIN</legend>
      </div>
      <form action="" method="POST">
        <div class="container">


          <div class="form-row mt-4">
            <div class="form-group txtHorizontal col-sm-12 col-md-8 col-lg-8">
              <label for="inputEmail"><strong>Email</strong></label>
              <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>

            <div class="form-group col-sm-12 col-md-8 col-lg-8">
              <label for="inputAddress2"><strong>Password</strong></label>
              <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
            </div>
          </div>
          <div class="form-group col-sm-12 col-md-8 col-lg-8">
            <div class="form-check">
              <button type="submit" class="btn btn-primary"><strong>Sign in</strong></button>
              <div>
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Remember me
                </label>
              </div>




            </div>
      </form>
      <br>
    </section>
    <?php include_once 'Components/footer.php'; ?>
  </div>
</body>