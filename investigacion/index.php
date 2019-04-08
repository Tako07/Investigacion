<?php
  include_once 'navbar.html';
 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>X</title>
   <link type="text/css" rel="stylesheet" href="public/css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="row">
      <div class="col s12 m9">
    	   <div class="hide-on-med-and-down carousel carousel-slider blue-grey ">
           <a class="carousel-item" href="#one!"><img class="img-responsive" height="400" src="public/images/hamburguesa1.jpeg"></a>
           <a class="carousel-item" href="#two!"><img class="img-responsive" height="400" src="public/images/Sincr.jpg"></a>
           <a class="carousel-item" href="#three!"><img class="img-responsive" height="400" src="public/images/torta1.jpg"></a>
         </div>
         <div class="hide-on-large-only carousel carousel-slider blue-grey ">
           <a class="carousel-item" href="#one!"><img class="img-responsive" height="200" src="public/images/hamburguesa1.jpeg"></a>
           <a class="carousel-item" href="#two!"><img class="img-responsive" height="200" src="public/images/Sincr.jpg"></a>
           <a class="carousel-item" href="#three!"><img class="img-responsive" height="200" src="public/images/torta1.jpg"></a>
         </div>
          <div class="col s6 m3">
            <select id="marca">
              <option value="" disabled selected>Marca</option>
              <option value="Toy Machine">Toy Machine</option>
              <option value="Element">Element</option>
              <option value="Darkstar">Darkstar</option>
            </select>
          </div>
          <div class="col s6 m3">
            <select id="ordenar">
              <option value="" disabled selected>Ordenar</option>
              <option value="precio">Precio</option>
              <option value="marca">Marca</option>
              <option value="nombre">Nombre</option>
            </select>
          </div>
          <div class="col s6 m3">
            <select>
              <option value="" disabled selected>Tipo</option>
              <option value="1">Tabla</option>
              <option value="2">Ruedas</option>
              <option value="3">Trucks</option>
              <option value="4">Valeros</option>
              <option value="5">Lijas</option>
            </select>
          </div>
          <div class="col s6 m3">
            <select>
              <option value="" disabled selected>Precio</option>
              <option value="1">0.00-9.99</option>
              <option value="2">10.00-19.99</option>
              <option value="3">20.00-29.99</option>
              <option value="4">30.00-39.99</option>
              <option value="5">40.00-49.99</option>
            </select>
          </div>
          <div class="input-field col s12 m6">
            <input id="search" name ="search" type="text" class="validate">
            <label for="search">Buscar</label>
          </div>
          <div id="desc" class="row col l12">
            <div class="col m3">
              <a href="compra.php"><img class="left responsive-img" src="public/images/hamburguesa1.jpeg" height="200" width="200" ></a>
            </div>
            <div class="col m9">
              <p><strong>Hamburgruesa</strong><br>
    					Está bien sabrosonga <br>
    					<strong>Descripción</strong><br>
    					Lleva pitomate <br>
    					y cebolla<br>
    					</p>
            </div>
          </div>
    		</div>
        <div class="container light-green col s6 m3">
          <p class="center-align"><img class="responsive-img" src="public/images/Sincr.jpg" height="200" width="200" ></p>
          <p class="center-align">Mega sincronizada</p>
          <p class="center-align"><img src="public/images/torta1.jpg" class="responsive-img" height="200" width="200" ></p>
          <p class="center-align">Torta de milaneza</p>
        </div>
    </div>
    <div class="botones">
      <button id="next">Next</button>
      <button id="previous">Previous</button>
    </div>

     <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/materialize.min.js"></script>
    <script type="text/javascript" src="public/js/index.js"></script>
</body>
</html>
<?php
  include_once 'footer.html';
?>
