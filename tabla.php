<html>
<head>
		<title>Generic - Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
    <body class="is-preload">
    <center>
        <table>
        
            <tbody>
            
              
                <?php
                
                 include("conexion.php");
                    $query="SELECT * FROM usuarios";
                    $resultado= $conexion->query($query);
                    while($row=$resultado->fetch_assoc()){
                 ?>    
                       
               
                
                         
                   <?php     
                    }
                ?>
                
            </tbody>
        </table>
        </center>
        <div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major"></h1>
                            <span class="image fit"><center><h1>GRACIAS POR REGISTRARSE</h1></center></span>
							
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
                       
                        <center><h2>click en <a href="inicio.php">"CONTINUAR"</a></h2></center>                   
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    </body>
</html>