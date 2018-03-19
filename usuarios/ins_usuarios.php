<!--2.7 -->
<?php
#en este archivo se resiven las variable de php
#hacemos llamado a la conexion 
include '../conexion/conexion.php';
#validadmos si se esta enviando por metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	# trae las variables o datos que vienen desde el formulario. Htmlentities es para los ataques de javascripts
	$nick = $con->real_escape_string(htmlentities($_POST['nick']));
	$pass1 = $con->real_escape_string(htmlentities($_POST['pass1']));
	#$pas1 = sha1($pas1);  #para encriptar las contraseñas
	$nivel = $con->real_escape_string(htmlentities($_POST['nivel']));
	$nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
	$correo = $con->real_escape_string(htmlentities($_POST['correo']));
}else {   
	header('location:../extend/alerta.php?msj=Utiliza el formulario&c=us&p=in&t=error');

}

	?>