<form role="form" action="../controllers/EmpresaController.php?accion=modificar" method="post">
              <div class="box-body">
<?php 
require_once "../../class/Empresa.php";
       
              $codigo=$_POST["employee_id"];
               $Empresa = new Empresa();
                         $dato = $Empresa->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                        
                  echo ' 
                     <div class="form-group">
                  <label for="codigo">N°</label>
                  <input type="text" class="form-control" readonly value="'.$codigo.'" id="id" name="id">
                </div>   
                <div class="form-group">
                          <label>Nombre Categoria</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-check-network-outline text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="nombre" id="nombre" value="'.$row['nombre'].'" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
                          </div>
                        </div>  
                        <div class="form-group">
                          <label>Descripcion</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-card-text-outline text-white"></i>
                              </span>
                            </div> 
                            <input type="text"  name="direccion" id="direccion" value="'.$row['direccion'].'" class="form-control" placeholder="example:Av. Principal Bloc 29 pasaje santa monica" aria-label="example:Av. Principal Bloc 29 pasaje santa monica" aria-describedby="colored-addon2">
                          </div>
                        </div> 
                      <br>
                    ';

                         }


 ?>
 </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../listas/Categoria.php'" name="cancel" value="Cancelar" >
              </div>
            </form>