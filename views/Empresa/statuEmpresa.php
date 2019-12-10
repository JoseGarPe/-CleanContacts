<form role="form" action="../controllers/EmpresaController.php?accion=estado" method="POST">
              <div class="box-body">
<?php 
require_once "../../class/Empresa.php";
               $codigo=$_POST["employee_id"];
               $estado=$_POST["employee_status"];
               if ($estado=='Inactivo') {
                 $cambio='Desactivar';
               }else{
                $cambio='Activar';
               }
					     $actividads = new Empresa();
                         $dato = $actividads->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                         		echo '

                            <label>¿Desea '.$cambio.' el Empresa: <strong> '.$row['nombre'].' </strong>?</label>
                          <input type="hidden" name="id" id="id" value="'.$row['id_empresa'].'"/> 
                           <input type="hidden" name="estado" id="estado" value="'.$estado.'"/>  
                             ';}
?>
      </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Confirmar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../list/Empresas.php'" name="cancel" value="Cancelar" >
              </div>
            </form>