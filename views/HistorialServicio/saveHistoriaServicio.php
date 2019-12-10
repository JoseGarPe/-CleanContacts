<form method="post" id="insert_form" action="../controllers/ContactoController.php?accion=guardar">  
                        <?php 
                        $id_empresa = $_POST['employee_empresa'];
                        echo '<input type="hidden"  name="id_empresa" id="id_empresa" value="'.$id_empresa.'" class="form-control">';
                         ?>
                         <div class="form-group">
                      <label for="exampleFormControlSelect3">Servicio</label>
                       <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-folder-key text-white"></i>
                              </span>
                              <select class="form-control" id="exampleFormControlSelect3" name="id_servicio" aria-describedby="colored-addon2">
                                <option value="0">SELECCIONE UNA OPCION</option>
                                <?php 
                                 require_once "../../class/Servicio.php";
                         $NivelA = new Servicio();
                         $ListUsua = $NivelA->selectALL();
                         foreach ((array)$ListUsua as $row) {
                          echo '<option value="'.$row['id_servicio'].'">'.$row['nombre'].'</option>';
                         }
                                 ?>
                      </select>
                       </div>
                      
                    </div> 
                        <div class="form-group">
                          <label>Fecha Realizado</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-check-network-outline text-white"></i>
                              </span>
                            </div>
                            <input type="date"  name="fecha_realizado" id="fecha_realizado" class="form-control">
                          </div>
                        </div> 
                        <div class="form-group">
                          <label>No. Factura</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-card-text-outline text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="n_factura" id="n_factura" class="form-control" >
                          </div>
                        </div> 
                        <div class="form-group">
                          <label>Comentario</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-card-text-outline text-white"></i>
                              </span>
                            </div>
                            <textarea name="comentario" class="form-control" ></textarea>
                          </div>
                        </div> 

                      <br>

                          <input type="hidden" name="guardar" id="guardar" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>