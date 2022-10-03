<?php
include 'dbh.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Artistas</title>
	
	<!--fonts-->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<link rel="stylesheet" href="estilo.css">
	
	
	
</head>
<body>
<!--<div id="bodyindex"><img src="img/fondo.jpg">-->

<?php
require("header.php");
?>
	
<div class="container div-central p-0">
		<div class="row">
			<div class="col-12">
                 <div class="title">
	                 <h1 class="title">Artistas</h1>
                   <div class="studio">
                   <p>El Arte Pop Americano es considerada como una reacción en contra al Expresionismo Abstracto ya que era el primer movimiento de arte Americano que logró reconocimiento global. Aunque a mediados de 1950 muchos se sintieron que el arte se había convertido en una practica de introspectiva y elitista. 
                    La evolución del Arte Pop es un intento a regresar esta tendencia a travez de la re-introducción de la imagen como un elemento vital en la pintura. Otro de sus objetivos era sacar el arte de la obscuridad y lo abstracto, este era un  modelo que ya se había probado y evaluado anteriormente.
                   Alrededor de 1955, dos extraordinarios artistas emergieron e iniciaron  la transición del Expresionismo Abstracto al Arte Pop. </p> </div>
</div>
<div id="carousell">
					
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/andyy.jpg" height="700" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Andy Warhol</h3>
        <p> Andy Warhol es reconocido por sus vividos retratos de celebridades. Su encanto es convertir marcas de productos de consumo masivo en arte, como un reflejo animado de la cultura capitalista y la fama que gobierna Estados Unidos.</p>
      </div>
    </div>
   
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/royy.jpg" height="700" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Roy Lichtenstein</h3>
        <p>Lichtenstein no solo copiaba paginas de cómics directamente, el empleaba una técnica muy compleja que involucraba el corte de imagenes para crear una nueva imagen en su totalidad con composiciones y diálogos dramáticos que reflejaban la cultura popular.</p>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/jamess.jpg" height="700" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">James Rosenquist</h3>
        <p>Rosenquist encontró fascinación en la popularización de la política y las figuras culturales en los medios masivos. En su trabajo  President Elect, el artista expone la cara de John F. Kennedy en medio de productos de consumo, incluyendo un Chevrolet amarillo y un pedazo de pastel.</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


</div>
</div>

<?php
require("footer.php");
?>
</div>


    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</body>
</html>