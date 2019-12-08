<form role="form" action="../controllers/ServicioController.php?accion=modificar" method="post">
              <div class="box-body">
<?php 
require_once "../../class/Servicio.php";
       
              $codigo=$_POST["employee_id"];
               $Servicio = new Servicio();
                         $dato = $Servicio->selectOne($codigo);
                        
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
                            <textarea name="descripcion" id="descripcion">'.$row['descripcion'].'</textarea>
                          </div>
                        </div> 
                      <br>
                        <div class="form-group">
                          <label>Precio</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-home-currency-usd text-white"></i>
                              </span>
                            </div>
                            <input type="number"  name="precio" id="precio" value="'.$row['precio'].'" class="form-control" placeholder="0.00" aria-label="0.00" aria-describedby="colored-addon2">
                          </div>
                        </div>
                   <div class="form-group">
                      <label for="exampleFormControlSelect3">Nivel Acceso</label>
                       <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-folder-key text-white"></i>
                              </span>
                              <select class="form-control" id="exampleFormControlSelect3" name="id_categoria" aria-describedby="colored-addon2">
                                <option value="0">SELECCIONE UNA OPCION</option>';
                              
                                 require_once "../../class/Categoria.php";
                         $NivelA = new Categoria();
                         $ListUsua = $NivelA->selectALL();
                         foreach ((array)$ListUsua as $r) {
                          if ($row['id_categoria']==$r['id_categoria']) {
                            
                          echo '<option value="'.$r['id_categoria'].'" selected>'.$r['nombre'].'</option>';
                          }else{
                          echo '<option value="'.$r['id_categoria'].'">'.$r['nombre'].'</option>';
                        }
                         }
                                
                   echo'   </select>
                       </div>
                    ';

                         }


 ?>
 </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../listas/Bodega.php'" name="cancel" value="Cancelar" >
              </div>
            </form>