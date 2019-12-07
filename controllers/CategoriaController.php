<?php 
require_once "../class/Usuario.php";
$accion=$_GET['accion'];

if ($accion=="modificar") {
	$id_categoria =$_POST['id'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$categoria = new Categoria();
	$categoria->setNombre($nombre);
	$categoria->setDescripcion($descripcion);
	$categoria->setId_Categoria($id_categoria);
	$update=$categoria->update();
	if ($update==true) {
		header('Location: ../list/Categoria.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Categoria.php?error=incorrecto');
	}

}
elseif ($accion=="eliminar") {
	$id_categoria =$_GET['id'];
	$categor = new Categoria();
	$categor->setId_Categoria($id_categoria);
	$delete=$categor->delete();
	if ($delete==true) {
		header('Location: ../list/Categoria.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Categoria.php?error=incorrecto');
	}
}
elseif ($accion=="guardar") 
{
	$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

	# code...
	$categoria = new Categoria();
	$categoria->setNombre($nombre);
	$categoria->setDescripcion($descripcion);
	$save=$categoria->save();
	if ($save==true) {
		header('Location: ../list/Categoria.php?success=correcto');
		# code...
	}
	else{
		header('Location: ../list/Categoria.php?error=incorrecto');
	}
}



?>