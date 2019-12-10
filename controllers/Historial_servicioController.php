<?php 
/*
private $id_Historial_servicio	;
private $id_servicio;
private $fecha_realizado;
private $n_factura;
private $id_categoria;
private $id_empresa;
*/

require_once "../class/Historial_servicio.php";

$accion=$_GET['accion'];

if ($accion=="modificar") {
	$id_Historial_servicio	 =$_POST['id'];
	$id_servicio=$_POST['id_servicio'];
	$fecha_realizado=$_POST['fecha_realizado'];
	$n_factura=1;

	$Historial_servicio	 = new Historial_servicio	();
	$Historial_servicio	->setId_servicio($id_servicio);
	$Historial_servicio	->setFecha_realizado($fecha_realizado);
	$Historial_servicio	->setId_Empresa($id_empresa);
	$Historial_servicio	->setN_factura($n_factura);
	$Historial_servicio	->setId_historial_Servicio($id_Historial_Servicio);
	$update=$Historial_servicio	->update();
	if ($update==true) {
		header('Location: ../list/Contacto.php?success=correcto&id_empresa='.$id_empresa.'');
		# code...
	}
	else{
		header('Location: ../list/Contacto.php?error=incorrecto&id_empresa='.$id_empresa.'');
	}

}
elseif ($accion=="eliminar") {
	$id_Historial_servicio	 =$_GET['id'];
	$Historial_servicio	 = new Historial_servicio();
	$Historial_servicio	->setId_historial_servicio($id_Historial_servicio);
	$delete=$Historial_servicio	->delete();
	if ($delete==true) {
		header('Location: ../list/Contacto.php?success=correcto&id_empresa='.$id_empresa.'');
		# code...
	}
	else{
		header('Location: ../list/Contacto.php?error=incorrecto&id_empresa='.$id_empresa.'');
	}
}
elseif ($accion=="guardar") 
{
	$id_Historial_servicio	 =$_POST['id'];
	$id_servicio=$_POST['id_servicio'];
	$fecha_realizado=$_POST['fecha_realizado'];
	$n_factura=$_POST['n_factura'];
	$id_empresa=$_POST['id_empresa'];
	$comentario=$_POST['comentario'];
	$Historial_servicio	 = new Historial_servicio	();
	$Historial_servicio->setId_servicio($id_servicio);
	$Historial_servicio->setFecha_realizado($fecha_realizado);
	$Historial_servicio->setN_factura($n_factura);
	$Historial_servicio->setId_Empresa($id_empresa);
	$Historial_servicio->setComentario($comentario);
	$save=$Historial_servicio->save();
	if ($save==true) {
		header('Location: ../list/Contacto.php?success=correcto&id_empresa='.$id_empresa.'');
		# code...
	}
	else{
		header('Location: ../list/Contacto.php?error=incorrecto&id_empresa='.$id_empresa.'');
	}
}
?>