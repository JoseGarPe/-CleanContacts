<?php 
/*
private $id_empresa;
private $nombre;
private $direccion;
private $anio_cliente;
private $id_categoria;
private $estado;
*/

require_once "../class/Empresa.php";

$accion=$_GET['accion'];

if ($accion=="modificar") {
	$id_empresa =$_POST['id'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$anio_cliente=1;

	$empresa = new Empresa();
	$empresa->setNombre($nombre);
	$empresa->setDireccion($direccion);
	$empresa->setId_empresa($id_empresa);
	$empresa->setanio_cliente($anio_cliente);
	$update=$empresa->update();
	if ($update==true) {
		header('Location: ../list/Empresa.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Empresa.php?error=incorrecto');
	}

}
elseif ($accion=="eliminar") {
	$id_empresa =$_GET['id'];
	$empresa = new Empresa();
	$empresa->setId_empresa($id_empresa);
	$delete=$empresa->delete();
	if ($delete==true) {
		header('Location: ../list/Empresa.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Empresa.php?error=incorrecto');
	}
}
elseif ($accion=="guardar") 
{
	$id_empresa =$_POST['id'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$anio_cliente=1;
	$estado='Activo';
	$empresa = new Empresa();
	$empresa->setNombre($nombre);
	$empresa->setDireccion($direccion);
	$empresa->setAnios_cliente($anio_cliente);
	$empresa->setEstado($estado);
	$save=$empresa->save();
	if ($save==true) {
		header('Location: ../list/Empresa.php?success=correcto');
		# code...
	}
	else{
		header('Location: ../list/Empresa.php?error=incorrecto');
	}
}
elseif ($accion=="estado") {
	$Id_empresa=$_POST['id'];
	$estado=$_POST['estado'];
	$acti = new Empresa();
	$acti->setId_empresa($Id_empresa);
	$acti->setEstado($estado);
	$delete=$acti->updateStatus();
	if ($delete==true) {
		header('Location: ../list/Empresa.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Empresa.php?error=incorrecto');
	}
}

?>