<?php
include_once("controllers/loader.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Josefin+Sans|Montserrat+Alternates" rel="stylesheet">  
    <link rel="stylesheet" href="css/master.css">
    <title>Landing Page</title>
</head>
<body>
<div class="container-fluid px-0 bg">
<?php  include_once 'Components/navbar.php' ?>

​
<nav class="gral">
 <main class="container-fluid">

            <section  class="row banner">
                <article  class="col-sm-12 col-md-12 col-lg-12 mt-2 banner1">
                    <img class=" img-fluid rounded mx-auto d-block b1" src="img/layout/bannerLaundry.jpg" alt="">
                </article>
            </section>
      <section class="row">           
       <section class="card col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4 w-50">
        <article class="card-body">
          <h5 class="card-title titulosgenerales text-center"><strong>LAVANDERIAS LAVA BIEN</strong></h5>
            <p class="card-text  text-center rta">En nuestras Sucursales Lava Bien desarrollamos tres procesos: 
          Lavandería que incluye lavado en agua, secado en secarropas y doblado.
          Plancha que incluye lavado en agua, secado en secarropas y planchado.
          Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p>
          <div class="col-6 text-center" ><a href=productos.php><button type="button" class="btn btn-primary btn-md buttonsLanding" >NUESTROS PRODUCTOS</button></a></div>
       </article>
   
    </section> 

       <section class="card col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4  w-50">
        <article class="card-body">
          <h5 class="card-title titulosgenerales text-center"><strong>COMUNIDAD LAVA BIEN </strong></h5>
            <p class="card-text  text-center rta">En nuestras Sucursales Lava Bien desarrollamos tres procesos: 
            Lavandería que incluye lavado en agua, secado en secarropas y doblado.
            Plancha que incluye lavado en agua, secado en secarropas y planchado.
            Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado..</p>
            <div class="col-6 text-center" ><a href=registro.php> <button type="button" class="btn btn-primary btn-md buttonsLanding" >REGISTRATE</button></a></div> 
         </article>
    </section>

    </section>




            <section class="row seccion1">
                <article class="col-xs-12 col-md-6 col-lg-4 mt-4 img-fluid rounded mx-auto d-flex  justify-content-around flex-wrap">
                    <img class="" src="img/layout/ironingServices.png">
                   
                </article>
                <article class="col-xs-12 col-md-6 col-lg-4 mt-4 img-fluid rounded mx-auto d-flex  justify-content-around flex-wrap ">
                    <img class="img-fluid rounded mx-auto d-block " src="img/layout/washingMachineServices.png">
                    
                </article>
                <article class="col-xs-12 col-md-6 col-lg-4  mt-4 img-fluid rounded mx-auto d-flex  justify-content-around flex-wrap">
                    <img class="" src="img/layout/dryCleaningServices.png">
                    
                </article>
            </section>


    <section class="card mt-4 w-75">
        <article class="col-md-12 col-sm-12 col-lg-12  card-body">
          <h5 class="card-title titulosgenerales text-center"><strong>MAS SOBRE NOSOTROS</strong></h5>
            <p class="card-text  text-center rta">Somos una de las cadenas lider en el tratamiento, entrega y logistica de prendas de vestir, surgio con la idea de cubrir
las necesidad de disminuir los tiempos de entrega asegurando la calidad de servicio, utilizando solo productos de alta calidad,
pensando siempre en el medio ambiente. Nuestro servicios personalizados permiten asegurar que puedas elegir el producto que mas 
se adapte a  tus necesidades.</p>
            <div class="col-md-12 text-center"><a href="#ABOUT.php" class="btn btn-primary text-center">NOSOTROS</a></div>
        </article>
    </section>

 
 </main>


<?php include_once 'Components/footer.php'; ?>
​
​
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



