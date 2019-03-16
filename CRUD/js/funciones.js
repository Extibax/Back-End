function agregardatos(nombre,identificacion){

	

	cadena="nombre=" + nombre + 
			"&identificacion=" + identificacion;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				 $('#nombre').val("");
				 $('#identificacion').val("");
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersonax').val(d[0]);
	$('#nombrex').val(d[1]);
	$('#identificacionx').val(d[2]);
}

function actualizaDatos(){

	id=$('#idpersonax').val();
	nombre=$('#nombrex').val();
	identificacion=$('#identificacionx').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&identificacion=" + identificacion;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito");
			}else{
				alertify.error("Fallo al actualizar");
			}
		}
	});

}

function confirmacion(id){
	alertify.confirm('Eliminar Datos', '¿Estas seguro de eliminar este registro?',
		function(){eliminarDatos(id)}
		,function(){alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

	$.ajax({
		type:"POST",
		url:"php/eliminarDatos.php",
		data:cadena,
		success:function(r){
			if (r==1){
				$('#tabla').load('componentes/tabla.php');
				$('#buscador').load('componentes/buscador.php');
				alertify.success("Eliminado con exito");
			}else{
				alertify.error("Fallo la accion");
			}
		}
	});

}