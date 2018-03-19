<!--1.1  -->
</main>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="../js/materialize.min.js"></script> 
<script src="../cdn/sweetalert2.js"></script>

<script>

/* 3.2 script para llamar al input buscar y filtrar cuando se valla escribiendo */
	$('#buscar').keyup(function(event) {
		var contenido = new RegExp($(this).val(), 'i'); /* este codigo es para que sea sencible a mayusculas y minusculas*/
		$('tr').hide(); /* para ocultar las tr*/
		$('tr').filter(function() {  /* para hacer el filtro dentro de las tr que ya ha oculatado*/
			return contenido.test($(this).text());
		}).show(); /* para que muestre lo que filtra*/ 
		$('.cabecera').attr('style',''); /* para que no me filtre las cabeceras y me las muestre*/
		
	});

	$('.button-collpase').sideNav();/*1.5 para que funcione el menu en celulares */
	$('select').material_select();  /*2.5 inicializa el select de seleccionar el nivel de usuarios se vea */

	function may(obj, id){ /*2.1 para convertir minusculas a mayusculas */
	obj = obj.toUpperCase();
	document.getElementById(id).value = obj;
	}
</script>

 