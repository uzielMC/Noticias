<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

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
		$titulosN[$i] = $fila['titulo'];
		$fechasN[$i] = $fila['fecha'];
		$textosN[$i] = $fila['texto'];
		$autoresN[$i] = $fila['autor'];
		$imagenesN[$i] = $fila['imagenes'];
		$categoriasN[$i] = $fila['categoria'];
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
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
	<article>
		<header>
			<h1><?php echo $titulosN[7]; ?> </h1>
			<?php print "<p>$autoresN[7]</p>"?>
			<?php print "<p>$fechasN[7]</p>"; ?>
		</header>
		<section>
			<?php print "<p>$textosN[7]</p>"; ?>
		</section>
	</article>
	
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