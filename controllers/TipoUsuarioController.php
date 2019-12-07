<?php
require_once "../class/Tipo_Usuario.php";

$accion=$_GET['accion'];

if ($accion=="modificar") {
	$id_TipoUsuario =$_POST['id'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$TipoUsuario = new Tipo_usuario();
	$TipoUsuario->setNombre($nombre);
	$TipoUsuario->setDescripcion($descripcion);
	$TipoUsuario->setId_tipo_usuario($id_TipoUsuario);
	$update=$TipoUsuario->update();
	if ($update==true) {
		header('Location: ../list/TipoUsuario.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/TipoUsuario.php?error=incorrecto');
	}

}
elseif ($accion=="eliminar") {
	$id_TipoUsuario =$_GET['id'];
	$TipoUsuario = new Tipo_usuario();
	$TipoUsuario->setId_tipo_usuario($id_TipoUsuario);
	$delete=$TipoUsuario->delete();
	if ($delete==true) {
		header('Location: ../list/TipoUsuario.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/TipoUsuario.php?error=incorrecto');
	}
}
elseif ($accion=="guardar") 
{
	$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

	# code...
	$TipoUsuario = new Tipo_usuario();
	$TipoUsuario->setNombre($nombre);
	$TipoUsuario->setDescripcion($descripcion);
	$save=$TipoUsuario->save();
	if ($save==true) {
		header('Location: ../list/TipoUsuario.php?success=correcto');
		# code...
	}
	else{
		header('Location: ../list/TipoUsuario.php?error=incorrecto');
	}
}

?>