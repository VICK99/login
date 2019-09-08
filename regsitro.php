<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>

<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>



</head>
<body background="img/arb.jpg">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">Registro de usuario</div>
					<div class="panel-body">

						<form id="frmRegistro">
							<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="" placeholder="Nombre">

						<label>Apellido</label>
						<input type="text" class="form-control input-sm" id="apellido" name="" placeholder="Apellido">

						<label>Usuario</label>
						<input type="text" class="form-control input-sm" id="usuario" name="" placeholder="Usuario">

						<label>Password</label>
						<input type="text" class="form-control input-sm" id="password" name="" placeholder="Password">
						<p></p>
						<span class="btn btn-primary" id="registrarNuevo" >Registrar</span>
							
						</form>
						
						<div style="text-align: right;">
							<a href="index.php" class="btn btn-success">Login</a>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

</body>

</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes de agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes de agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes de agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes de agregar el password");
				return false;
			}


			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario="  + $('#usuario').val() +
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"registro.php",
						data:cadena,
						success:function(r){
							if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Usted fue Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");

							}

						}

					});


		});

	});
</script>
 





