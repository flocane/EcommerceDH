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
<?php  include_once 'Components/navbar.php' ?>
<div class="container-fluid px-0 bg">
​
<nav class="gral">
 <main>
    
     
   
      
    <section class ="row" id="titulo  faq">
        <p class="titulosgenerales" > <strong> LAVANDERIAS LAVA BIEN </strong></p>
   
          <article class="col-12">
    
          <p class="rta"> En nuestras Sucursales Lava Bien desarrollamos tres procesos: 
            Lavandería que incluye lavado en agua, secado en secarropas y doblado.
            Plancha que incluye lavado en agua, secado en secarropas y planchado.
            Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p>
            <div class="col-6"><a href=productos.php> <button type="button" class="btn btn-primary btn-lg buttonsLanding" >NUESTROS PRODUCTOS</button></a></div>
         </article>

    </section>

    <section class="row ">
<article class="col-4 ServiceBannerArt">
    <img src="img\layout\ironingServices.png" alt="" srcset="">
    <h2 class="headingServiceBanner">Planchado</h2>
</article>
<article class="col-4 ServiceBannerArt">
     <img src="img\layout\washingMachineServices.png" alt="" srcset="">
     <h2 class="headingServiceBanner">Lavado</h2>
</article>
<article class="col-4 ServiceBannerArt">
    <img src="img\layout\dryCleaningServices.png" alt="" srcset="">
    <h2 class="headingServiceBanner">Tintoreria</h2>
</article>
​
​
</section>

<section  class="row " id="titulo  faq">
        <p class="titulosgenerales" > <strong> COMUNIDAD LAVA BIEN </strong></p>
    </section>
    <article class="col-12">
    
          <p class="rta"> En nuestras Sucursales Lava Bien desarrollamos tres procesos: 
            Lavandería que incluye lavado en agua, secado en secarropas y doblado.
            Plancha que incluye lavado en agua, secado en secarropas y planchado.
            Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p>
           <a href=registro.php> <button type="button" class="btn btn-primary btn-lg buttonsLanding" >REGISTRATE</button></a></div> 
         </article>

    </section>


    <section  class="row "id="titulo  faq">
        <p class="titulosgenerales" > <strong> MAS SOBRE NOSOTROS</strong></p>
    </section>
    <article class="col-12">
    
          <p class="rta"> Somos una de las cadenas lider en el tratamiento, entrega y logistica de prendas de vestir, surgio con la idea de cubrir
    las necesidad de disminuir los tiempos de entrega asegurando la calidad de servicio, utilizando solo productos de alta calidad,
    pensando siempre en el medio ambiente. Nuestro servicios personalizados permiten asegurar que puedas elegir el producto que mas 
    se adapte a  tus necesidades.</p>
    <div class="col-12"><a href=ABOUT.php> <button type="button" class="btn btn-primary btn-lg buttonsLanding" >NOSOTROS</button></a></div>
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



