/*=============================================
CARGANDO MUNICIPIOS
=============================================*/

$("#estados").change(function(){
	var idEstado = $('#estados').val();
	var datos = new FormData();
    datos.append("id_estado", idEstado);
	$.ajax({
		url:"ajax/geografia.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
    	contentType: false,
    	processData: false,
		success: function(respuesta){
            $('#municipios').html(respuesta);
		}

	})
})