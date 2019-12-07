<form role="form" action="../controllers/UsuarioController.php?accion=eliminar" method="POST">
              <div class="box-body">
<?php 
require_once "../../class/Usuario.php";
               $codigo=$_POST["employee_id"];
					     $actividads = new Usuario();
                         $dato = $actividads->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                         		echo '

                            <label>¿Desea eliminar el usuario: <strong> '.$row['nombre'].' '.$row['apellido'].'</strong>? Se eliminara toda la informacion ingresada de este usuario</label>
                          <input type="hidden" name="id" id="id" value="'.$row['id_usuario'].'"/>  
                             ';}
?>
      </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Confirmar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../list/Usuarios.php'" name="cancel" value="Cancelar" >
              </div>
            </form>