<?php
    require_once("controllers/loader.php");

    
        $productos = $query->getProducts();
    
?>
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
        <div class="carrito"><a href="carrito.php"> <i class="shopping-cart"></i></a></div>
        <p class="titulosgenerales" > <strong> Hacé tu pedido</strong></p>
        <p class="bajada">Descubrí nuestros servicios de lavandería, planchado o lavado en seco para tus prendas más delicadas o la ropa de hogar.</p>
    </section>

    <div class="container">
    <div class="row "> 

        <?php foreach ($productos as $key => $producto) :?>
            <div class="producto col-md-4 col-sm-6 mt-5 mb-5">  
                <div class="cajaFoto">    
                    <img class="fotoProducto" src="<?=$producto['imagen'];?>" alt="">      
                </div>
                <h4 class="nombreProd"><?=$producto['nombre'];?></h4>
                <p class="precio">Precio: <em class="precio"><?=$producto['precio'];?></em> </p>
                <div class= mb-5> 
                    <button class="botonSubmit"><a href="carrito.php"> Agregar</a></button>
                </div>
            </div>
        <?php endforeach;?>

    </div>
    </div>
 </main>

<?php include_once 'Components/footer.php'; ?>
</body>
</html>
