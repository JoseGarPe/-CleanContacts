<form role="form" action="../controllers/CategoriaController.php?accion=status" method="POST">
              <div class="box-body">
<?php 
require_once "../../class/Categorias.php";
               $codigo=$_POST["employee_id"];
               $estado=$_POST["employee_status"];
               if ($estado=='Inactivo') {
                 $cambio='Desactivar';
               }else{
                $cambio='Activar';
               }
					     $actividads = new Categorias();
                         $dato = $actividads->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                         		echo '

                            <label>¿Desea '.$cambio.' el Categoria: <strong> '.$row['nombre'].' </strong>?</label>
                          <input type="hidden" name="id" id="id" value="'.$row['id_categoria'].'"/> 
                           <input type="hidden" name="estado" id="estado" value="'.$estado.'"/>  
                             ';}
?>
      </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Confirmar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../list/Categorias.php'" name="cancel" value="Cancelar" >
              </div>
            </form>