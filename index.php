<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WatchMen News</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
<?php
	require_once "cargarNoticias.php";
	$datosN = datosNoticia(); 
	$i=0;
	foreach($datosN as $valor => $fila){
		$IDN[$i] = $fila['ID'];
		$titulosN[$i] = $fila['titulo'];
		$fechasN[$i] = $fila['fecha'];
		$textosN[$i] = $fila['texto'];
		$autoresN[$i] = $fila['autor'];
		$imagenesN[$i] = $fila['imagen'];
		$categoriasN[$i] = $fila['categoria'];
		$i ++;
	}
	$i=0;
	foreach($datosN as $valor => $fila){
		$fN2[$i] = $fila['fecha'];
		$lN2[$i] = $fila['likes'];
		$i ++;
	}
	array_multisort($lN2, SORT_DESC,SORT_REGULAR,$fN2,SORT_DESC,SORT_REGULAR, $datosN);
	$i=0;
	foreach($datosN as $valor => $fila){
		$IDN2[$i] = $fila['ID'];
		$titulosN2[$i] = $fila['titulo'];
		$fechasN2[$i] = $fila['fecha'];
		$textosN2[$i] = $fila['texto'];
		$autoresN2[$i] = $fila['autor'];
		$imagenesN2[$i] = $fila['imagen'];
		$categoriasN2[$i] = $fila['categoria'];
		$i ++;
	}
?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
     <img src="logo.svg" alt="Logo" style="width:200px;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">HOME
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DEPORTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">POLÍTICA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CULTURA</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" ><img src="facebook.svg" alt="Logo" style="width:20px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" ><img src="twitter.svg" alt="Logo" style="width:20px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" ><img src="youtube.svg" alt="Logo" style="width:20px;"></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="form.html" ><img src="ingresar.svg" alt="Logo" style="width:20px;"></a>
           </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">

      <div class="col-lg-3">

        <h4 class="my-4">ÚLTIMAS</h4>
        <div class="list-group">
          <a href="noticia1.php?ID=<?php echo $IDN[0]?>" class="list-group-item"><?php print "<p>$fechasN[0]</p>";
												print "<p>$titulosN[0]</p>";?></a>
          <a href="noticia1.php?ID=<?php echo $IDN[1]?>" class="list-group-item"><?php print "<p>$fechasN[1]</p>";
												print "<p>$titulosN[1]</p>";?></a>
          <a href="noticia1.php?ID=<?php echo $IDN[2]?>" class="list-group-item"><?php print "<p color = blue font>$fechasN[2]</p>";
												print "<p color= black>$titulosN[2]</p>";?></a>
          <a href="noticia1.php?ID=<?php echo $IDN[3]?>" class="list-group-item"><?php print "<p>$fechasN[3]</p>";
												print "<p>$titulosN[3]</p>";?></a>
          <a href="noticia1.php?ID=<?php echo $IDN[4]?>" class="list-group-item"><?php print "<p>$fechasN[4]</p>";
												print "<p>$titulosN[4]</p>";?></a>
          <a href="noticia1.php?ID=<?php echo $IDN[5]?>" class="list-group-item"><?php print "<p>$fechasN[5]</p>";
												print "<p>$titulosN[5]</p>";?></a> 
        </div>
		
      </div>
      <!-- /.col-lg-3 -->
		<!--/*<script>
			function Funcion(){
			}
		</script>*/-->
		
      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="LeerImagen.php?ID=<?php echo $IDN2[0]?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="LeerImagen.php?ID=<?php echo $IDN2[1]?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="LeerImagen.php?ID=<?php echo $IDN2[2]?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[0]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[0]?>" alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[0]</p>";; ?>
                  </div>
                </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[1]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[1]?>"  alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[1]</p>";; ?>
                  </div>
                </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[2]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[2]?>" alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[2]</p>";; ?>
                  </div>
                </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[3]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[3]?>"  alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[3]</p>";; ?>
                  </div>
                </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[4]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[4]?>"  alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[4]</p>";; ?>
                  </div>
                </div>
          </div>
            
         <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[5]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[5]?>" alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[5]</p>";; ?>
                  </div>
                </div>
          </div>
        
         <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[6]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[6]?>"  alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[6]</p>";; ?>
                  </div>
                </div>
          </div>
            
         <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN2[7]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN2[7]?>"  alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN2[7]</p>";; ?>
                  </div>
                </div>
          </div>
        
         <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-80">
                  <a href="noticia1.php?ID=<?php echo $IDN[8]?>"><img class="card-img-top" src="LeerImagen.php?ID=<?php echo $IDN[8]?>"  alt=""></a>
                  <div class="card-body">
                    <?php print "<p class=\"card-text\">$titulosN[8]</p>"; ?>
                  </div>
                </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
