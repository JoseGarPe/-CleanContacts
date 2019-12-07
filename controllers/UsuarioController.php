<?php 
require_once "../class/Usuario.php";
$accion=$_GET['accion'];
/*
private $id_usuario;
 private $nombre;
 private $apellido;
 private $correo;
 private $pass;
 private $id_tipo_usuario;
 private $estado;
 private $telefono;
*/
if ($accion=='guardar') {
 if (isset($_POST['nombre'])) {
 	$nombre=$_POST['nombre'];
 }else{
 	$nombre=NULL;
 }
 if (isset($_POST['apellido'])) {
 	$apellido=$_POST['apellido'];
 }else{
 	$apellido=NULL;
 }
 if (isset($_POST['correo'])) {
 	$correo=$_POST['correo'];
 }else{
 	$correo=NULL;
 }
  if (isset($_POST['pass'])) {
 	$pass=$_POST['pass'];
 }else{
 	$pass=NULL;
 }

  if (isset($_POST['id_tipo_usuario'])) {
 	$id_tipo_usuario=$_POST['id_tipo_usuario'];
 }else{
 	$id_tipo_usuario=NULL;
 }
 $estado='Activo';

  if (isset($_POST['telefono'])) {
 	$telefono=$_POST['telefono'];
 }else{
 	$telefono=NULL;
 }
 $usua = new Usuario();
 $usua->setNombre($nombre);
 $usua->setApellido($apellido);
 $usua->setCorreo($correo);
 $usua->setPass($pass);
 $usua->setId_tipo_usuario($id_tipo_usuario);
 $usua->setEstado($estado);
 $usua->setTelefono($telefono);
 $save =$usua->save();

	if ($save==TRUE) {
		
			header('Location: ../list/Usuarios.php?success=correcto');
	}else{
		header('Location: ../list/Usuarios.php?error=incorrecto');
	}
}
elseif ($accion=='eliminar') {
	$id_usuario=$_POST['id_usuario'];
 $usua = new Usuario();
 $usua->setId_usuario($id_usuario);
 $delete= $usua->delete();
 if ($delete==TRUE) {
		
			header('Location: ../list/Usuarios.php?success=correcto');
	}

}
elseif ($accion=='status') {
	$id_usuario=$_POST['id_usuario'];
	if ($_POST['estado']=='Activo') {
		$estado='Inactivo';
	}else{
		$estado='Activo';
	}
 $usua = new Usuario();
 $usua->setId_usuario($id_usuario);
 $delete= $usua->delete();
 if ($delete==TRUE) {
		
			header('Location: ../list/Usuarios.php?success=correcto');
	}

}($accion=="modificar") {
 if (isset($_POST['nombre'])) {
 	$nombre=$_POST['nombre'];
 }else{
 	$nombre=NULL;
 }
 if (isset($_POST['apellido'])) {
 	$apellido=$_POST['apellido'];
 }else{
 	$apellido=NULL;
 }
 if (isset($_POST['correo'])) {
 	$correo=$_POST['correo'];
 }else{
 	$correo=NULL;
 }
  if (isset($_POST['pass'])) {
 	$pass=$_POST['pass'];
 }else{
 	$pass=NULL;
 }

  if (isset($_POST['id_tipo_usuario'])) {
 	$id_tipo_usuario=$_POST['id_tipo_usuario'];
 }else{
 	$id_tipo_usuario=NULL;
 }
 $estado='Activo';

  if (isset($_POST['telefono'])) {
 	$telefono=$_POST['telefono'];
 }else{
 	$telefono=NULL;
 }
 $usua = new Usuario();
 $usua->setNombre($nombre);
 $usua->setApellido($apellido);
 $usua->setCorreo($correo);
 $usua->setPass($pass);
 $usua->setId_tipo_usuario($id_tipo_usuario);
 $usua->setEstado($estado);
 $usua->setTelefono($telefono);
 $usua->setId_usuario($_POST['id_usuario']);
	$update=$usua->update();
	if ($update==true) {
		header('Location: ../list/Usuarios.php?success=correcto');
		# code...
	}else{
		header('Location: ../list/Usuarios.php?error=incorrecto');
	}

}
 ?>