<form role="form" action="../controllers/ServicioController.php?accion=eliminar" method="POST">
              <div class="box-body">
<?php 
require_once "../../class/Servicio.php";
               $codigo=$_POST["employee_id"];
					     $actividads = new Servicio();
                         $dato = $actividads->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                         		echo '

                            <label>¿Desea eliminar el Servicio: <strong> '.$row['nombre'].'</strong>? Se eliminara toda la informacion ingresada de este Servicio</label>
                          <input type="hidden" name="id" id="id" value="'.$row['id_servicio'].'"/>  
                             ';}
?>
      </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Confirmar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../list/Servicios.php'" name="cancel" value="Cancelar" >
              </div>
            </form>