<form role="form" action="../controllers/EmpresaController.php?accion=eliminar" method="POST">
              <div class="box-body">
<?php 
require_once "../../class/Empresa.php";
               $codigo=$_POST["employee_id"];
					     $actividads = new Empresa();
                         $dato = $actividads->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                         		echo '

                            <label>¿Desea eliminar el Empresa: <strong> '.$row['nombre'].'</strong>? Se eliminara toda la informacion ingresada de este Empresa</label>
                          <input type="hidden" name="id" id="id" value="'.$row['id_empresa'].'"/>  
                             ';}
?>
      </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Confirmar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../list/Empresa.php'" name="cancel" value="Cancelar" >
              </div>
            </form>