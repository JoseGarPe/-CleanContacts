<form method="post" id="insert_form" action="../controllers/ContactoController.php?accion=guardar">  
                        <?php 
                        $id_empresa = $_POST['employee_empresa'];
                         ?>
                        <div class="form-group">
                          <label>Nombres COntacto</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-check-network-outline text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="nombre" id="nombre" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
                          </div>
                        </div>  
                        <div class="form-group">
                          <label>Apellidos COntacto</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-check-network-outline text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="apellido" id="apellido" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
                          </div>
                        </div> 
                        <div class="form-group">
                          <label>Correo</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-card-text-outline text-white"></i>
                              </span>
                            </div>
                            <input type="email"  name="correo" id="correo" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
                          </div>
                        </div> 

                        <div class="form-group">
                          <label>Telefono</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-card-text-outline text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="telefono" id="telefono" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
                          </div>
                        </div> 

                      <br>

                          <input type="hidden" name="guardar" id="guardar" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>