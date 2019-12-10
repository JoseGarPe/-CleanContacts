<?php 
require_once "../class/Contacto.php";
$accion=$_GET['accion'];

if ($accion=="modificar") {
	$id_Contacto =$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$Contacto = new Contacto();
	$Contacto->setNombre($nombre);
	$Contacto->setApellido($apellido);
	$Contacto->setTelefono($telefono);
	$Contacto->setCorreo($correo);
	$Contacto->setId_contacto($id_Contacto);
	$update=$Contacto->update();
	if ($update==true) {
		header('Location: ../list/Contacto.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Contacto.php?error=incorrecto');
	}

}
elseif ($accion=="eliminar") {
	$id_Contacto =$_GET['id'];
	$categor = new Contacto();
	$categor->setId_Contacto($id_Contacto);
	$delete=$categor->delete();
	if ($delete==true) {
		header('Location: ../list/Contacto.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Contacto.php?error=incorrecto');
	}
}
elseif ($accion=="guardar") 
{
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];

	# code...
	$Contacto = new Contacto();
	$Contacto->setNombre($nombre);
	$Contacto->setApellido($apellido);
	$Contacto->setCorreo($correo);
	$Contacto->setTelefono($telefono);
	$save=$Contacto->save();
	if ($save==true) {
		header('Location: ../list/Contacto.php?success=correcto');
		# code...
	}
	else{
		header('Location: ../list/Contacto.php?error=incorrecto');
	}
}



?>