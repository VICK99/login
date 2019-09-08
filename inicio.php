<?php 
	session_start();

	if(isset($_SESSION['user'])){


 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
		<?php require_once "scripts.php"; ?>
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>
</head>
<body>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<h2>Has entrado con Exito</h2>
				<a href="salir.php" class="btn btn-info">Salir</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php 
}else{
	header("location:index.php");
}
 ?>
