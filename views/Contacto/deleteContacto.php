<form role="form" action="../controllers/ContactoController.php?accion=eliminar" method="POST">
              <div class="box-body">
<?php 
require_once "../../class/Contacto.php";
               $codigo=$_POST["employee_id"];
                        $id_empresa = $_POST['employee_empresa'];
                        echo '<input type="hidden"  name="id_empresa" id="id_empresa" value="'.$id_empresa.'" class="form-control">';
					     $actividads = new Contacto();
                         $dato = $actividads->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                         		echo '

                            <label>¿Desea eliminar el Contacto: <strong> '.$row['nombre'].'</strong>? Se eliminara toda la informacion ingresada de este Contacto</label>
                          <input type="hidden" name="id" id="id" value="'.$codigo.'"/>  
                             ';}
?>
      </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Confirmar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../list/Contactos.php'" name="cancel" value="Cancelar" >
              </div>
            </form>