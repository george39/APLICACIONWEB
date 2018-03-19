<!-- 2.0 formulario de usuario parte 1 -->
<?php include '../extend/header.php';

?>

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Alta de usuarios</span>
				<!-- ins_usuarios es una instancia que se agrega para identificarlo mas rapido y enctype="multipart/form-data es para enviar una foto del usuario-->
				<form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
					<div class="input-field">
				<!-- onblur="may(this.value, this.id"> es para dejar enviar todos los datos del formulario en mayusculas -->
						<input type="text" name="nick" required autofocus title="DEBE DE TENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8,15}" id="nick" onblur="may(this.value, this.id)">
						<!--2.4 -->
						<label for="nick">Nick</label>	
						</div>

					<!--2.3 validar si el usuario existe en la bd -->
					<div class="validacion"></div>

					<!-- para ingresar contraseña -->
					<div class="input-field">
						<input type="password" name="pass1" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pass1" required>
						<label for="pass1">Contraseña</label>
					</div>

					<!--2.5 para verificar contraseña -->
					<div class="input-field">
						<input type="password" name="pass1" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pass2" required>
						<label for="pass2">Verificar contraseña</label>

						<!--2.5 para el nivel del usuario -->
					<select name="nivel" required>
						<option value="" disabled selected>ELIGE UN NIVEL DE USUARIO</option>
						<option value="ADMINISTRADOR">ADMINISTRADOR</option>
						<option value="ASESOR">ASESOR</option>
					</select>

					<!--2.5 para el nombre de usuario -->
					<div class="input-field">
						<input type="text" name="nombre" title="Nombre de usuario" id="nombre" onblur="may(this.value, this.id)" required pattern="[A-Z/s ]+">
						<label for="nombre">Nombre completo del usuario</label>
					</div>

					<!--2.5 para el correo de usuario -->
					<div class="input-field">
						<input type="email" name="correo" title="Correo electronico" id="correo" >
						<label for="corre">Correo electronico</label>
					</div>

					<!--2.5 para la foto del usuario-->
					<div class="file-field input-field">
						<div class="btn">  
							<span>Foto</span>
							<input type="file" name="foto" >
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
<button type="submit" class="btn black" id="btn_guardar">Guardar<i class="material-icons">send</i> </button>

				</form>
			</div>
		</div>
	</div>
</div>


<!--3.2 barra de busqueda para filtrar los usuarios  -->
<div class="row">
	<div class="col s12">
		<nav class="brown lighten-3">
			<div class="nav-wrapper">
				<div class="input-field">
					<input type="search" id="buscar" autocomplete="off">
					<label for="buscar"><i class="material-icons">search</i></label>
					<i class="material-icons">close</i>
				</div>
			</div>
		</nav>
	</div>
</div>




<!--3.2 mostrar los datos del formulario en el navegador -->
<?php $sel = $con->query("SELECT * FROM usuario"); 
$row = mysqli_num_rows($sel);
?>
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Usuario (<?php echo $row ?>)</span> <!-- para mostrar cuantos usuarios hay -->
				<table>
					<head>
						<tr class="cabecera"> <!--para que no me filtre las tr y me muestre las cabeceras -->
						<th>Nick</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Nivel</th>						
						<th>Foto</th>
						<th>Bloqueo</th>
						
						</tr>
					</head>
					<!-- para recorrer las filas -->
					<?php while ($f = $sel->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $f['nick'] ?></td>
							<td><?php echo $f['nombre'] ?></td>
							<td><?php echo $f['correo'] ?></td>
							<td><?php echo $f['nivel'] ?></td>
							<td><img src="<?php echo $f['foto'] ?>" width="50" class="circle" ></td>
							<td><?php echo $f['bloqueo'] ?></td>
							<td></td>
							<td></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>					

<?php include '../extend/scripts.php'; ?>


<!--2.6 de aqui se pasaron los scripts a js -->
<?php include '../extend/scripts.php'; ?>
<script src="../js/validacion.js"></script>

</body>
</html>

	