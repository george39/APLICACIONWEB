/*2.3 validar que el usuario existe en la bd con metodo ajax */
$('#nick').change(function() {
		$.post('ajax_validacion_nick.php',{
			nick:$('#nick').val(),

			beforeSend: function(){
				$('.validacion').html("Espere un momento por favor");
			}

		}, function(respuesta){
			$('.validacion').html(respuesta);
		});
	});

	/*2,6 comparar contraseña con verificar contraseña con jquery */
	$('#btn_guardar').hide(); /*no aperece el boton guardar si las contraseñas no coinciden*/
	$('#pass2').change(function(event){
		if ($('#pass1').val() == $('#pass2').val()) {
			swal('Bien hecho...','Las contraseñas coinciden','success');
			$('#btn_guardar').show(); /*aperece el boton guardar si las contraseñas  coinciden*/
		}else {
			swal('Opps...','Las contraseñas no coinciden','error');
			$('#btn_guardar').hide(); /*no aperece el boton guardar si las contraseñas no coinciden*/
		}
	});

	/*2.6 para desactivar el enter */
	$('.form').keypress(function(e) {
		if (e.which == 13) {
			return false;
		}
		})