<?php 
/*
private $id_servicio;
private $nombre;
private $descripcion;
private $precio;
private $id_categoria;
private $estado;
*/

require_once "../class/Servicio.php";

$accion=$_GET['accion'];

if ($accion=="modificar") {
	$id_servicio =$_POST['id'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$precio=$_POST['precio'];
	$id_categoria=$_POST['id_categoria'];

	$Servicio = new Servicio();
	$Servicio->setNombre($nombre);
	$Servicio->setDescripcion($descripcion);
	$Servicio->setId_categoria($id_categoria);
	$Servicio->setId_servicio($id_servicio);
	$Servicio->setPrecio($precio);
	$Servicio->setEstado($estado);
	$update=$Servicio->update();
	if ($update==true) {
		header('Location: ../list/Servicio.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Servicio.php?error=incorrecto');
	}

}
elseif ($accion=="eliminar") {
	$id_Servicio =$_GET['id'];
	$Servicio = new Servicio();
	$Servicio->setId_servicio($id_Servicio);
	$delete=$Servicio->delete();
	if ($delete==true) {
		header('Location: ../list/Servicio.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Servicio.php?error=incorrecto');
	}
}
elseif ($accion=="guardar") 
{
	$id_servicio =$_POST['id'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$precio=$_POST['precio'];
	$id_categoria=$_POST['id_categoria'];
	$estado='Activo';
	$Servicio = new Servicio();
	$Servicio->setNombre($nombre);
	$Servicio->setDescripcion($descripcion);
	$Servicio->setId_categoria($id_categoria);
	$Servicio->setPrecio($precio);
	$Servicio->setEstado($estado);
	$save=$Servicio->save();
	if ($save==true) {
		header('Location: ../list/Servicio.php?success=correcto');
		# code...
	}
	else{
		header('Location: ../list/Servicio.php?error=incorrecto');
	}
}

?>