<!DOCTYPE html>
<html lang="en">
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
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    
</head>
<body >
<div class="container-fluid px-0">
<?php  include_once 'Components/navbar.php' ?>

<nav class="gral">
 <main>
    <section >
        <div class="carrito"><i class="shopping-cart"></i></div>
        <p class="titulosgenerales" > <strong> Hacé tu pedido</strong></p>
        <p class="bajada">Descubrí nuestros servicios de lavandería, planchado o lavado en seco para tus prendas más delicadas o la ropa de hogar.</p>
    </section>

    <div class="flex-container">

        <div class="producto">  
            <div class="cajaFoto">        
                 <img src="img/lavadora.png" alt="Lavado Small" style="width:100%; ">
            </div>
            <h4 class="nombreProd">Lavado Small</h4>
            <p class="precio">Precio: <em class="precio">$449</em> </p>
            <div> 
                <button class="botonSubmit">Agregar</button>
            </div>
        </div>

        <div class="producto"> 
             <div class="cajaFoto">     
                <img src="img/lavadora.png" alt="Lavado Medium" style="width:100%;">
            </div>
            <h4 class="nombreProd">Lavado Medium</h4>
              <p class="precio">Precio: <em class="precio">$549</em> </p>
              <div> 
                <button class="botonSubmit">Agregar</button>
              </div>
        </div>

        <div class="producto">     
            <div class="cajaFoto">
                <img src="img/lavadora.png" alt="Lavado large" style="width:100%;">
            </div> 
            <h4 class="nombreProd">Lavado Large</h4>
            <p class="precio">Precio: <em class="precio">$649</em> </p>
              <div> 
                <button class="botonSubmit">Agregar</button>
              </div>
        </div>

        <div class="producto"> 
             <div class="cajaFoto">          
                <img src="img/planchado2.png" alt="Planchado" style="width:100%;">
            </div>
            <h4 class="nombreProd">Planchado</h4>
            <p class="precio">Precio: <em class="precio">$415</em> </p>
            <div> 
                <button class="botonSubmit">Agregar</button>
            </div>
        </div>

        <div class="producto"> 
             <div class="cajaFoto">     
                 <img src="img/secado.png" alt="Secado" style="width:100%;">
            </div>  
             <h4 class="nombreProd">Secado</h4>
              <p class="precio">Precio: <em class="precio">$230</em> </p>
              <div> 
                <button class="botonSubmit">Agregar</button>
              </div>
        </div>

        <div class="producto"> 
            <div class="cajaFoto">
                <img src="img/lavado-en-seco.png" alt="Limpieza" style="width:100%;">
            </div>     
            <h4 class="nombreProd">Limpieza</h4>
            <p class="precio">Precio: <em class="precio">$346</em> </p>
            <div> 
                <button class="botonSubmit">Agregar</button>
            </div>
        </div>

    </div>

 
 </main>


</nav>




</body>
</html>
<?php include_once 'Components/footer.php'; ?>