<!--1. contenido del header -->
<?php include 
'../conexion/conexion.php'; 
                               
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet"  href="../cdn/sweetalert2.css">

	<!-- para generar espacio a la derecha del menu para el contenido -->
	<style media="screen">
		  header, main, footer {
      padding-left: 300px;
    }

/* para quitar el boton del menu cuando esta en pantalla grande */
	.button-collpase{
		display: none;
	}
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
      /*para poner el boton del menu cuando la pantalla esta chiquita */
      .button-collpase{
      	display: inherit;
      }
    }
    </style>
	
	<title>Proyecto</title>
</head>
<body>

<main>
	<?php include 'menu_admin.php' ?>

