<form role="form" action="../controllers/CategoriaController.php?accion=eliminar" method="POST">
              <div class="box-body">
<?php 
require_once "../../class/Categoria.php";
               $codigo=$_POST["employee_id"];
					     $actividads = new Categoria();
                         $dato = $actividads->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                         		echo '

                            <label>¿Desea eliminar el Categoria: <strong> '.$row['nombre'].'</strong>? Se eliminara toda la informacion ingresada de este Categoria</label>
                          <input type="hidden" name="id" id="id" value="'.$row['id_categoria'].'"/>  
                             ';}
?>
      </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Confirmar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../list/Categoria.php'" name="cancel" value="Cancelar" >
              </div>
            </form>