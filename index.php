<!DOCTYPE html>
<html>
<head>
	

	<title>Login</title>
	<?php require_once "scripts.php"; ?>
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>


</head>
<body background="img/fondo.jpg"> 
	<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">¡¡¡¡BIENVENIDO!!!!</div>
				<div class="panel panel-body">
					<div style="text-align: center">
						<img src="img/ave.jpg" height="200">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id=usuario class="form-control input-sm" name="" placeholder="Usuario">

					<label>Password</label>
					<input type="password" id=password class="form-control input-sm" name="" placeholder="Password">
					<p></p>
					<span class="btn btn-primary" id="entrarsistema">Entrar</span>
					<a href="regsitro.php" class="btn btn-danger">Registro</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
	
</body>
</html>


<script type="text/javascript">
	
	$(document).ready(function(){
		$('#entrarsistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;

			}

			cadena="usuario=" + $('#usuario').val() + 
			"&password=" + $('#password').val();

			$.ajax({
				type:"POST",
				url:"login.php",
				data:cadena,
				success:function(r){
					if(r==1){
						window.location="inicio.php"
					}else{
						alertify.alert("fallo al entrar :(");
					}

				}
			});








		});


	});
</script>

