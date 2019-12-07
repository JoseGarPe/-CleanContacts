<form method="post" id="insert_form" action="../controllers/UsuarioController.php?accion=guardar">  
                        
                        <div class="form-group">
                          <label>Nombres</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-account-box text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="nombre" id="nombre" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
                          </div>
                        </div>  
                        <div class="form-group">
                          <label>Apellidos</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-account-box-outline text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="apellido" id="apellido" class="form-control" placeholder=" Apellidos" aria-label="Apellidos" aria-describedby="colored-addon2">
                          </div>
                        </div> 
                      <br>
                        <div class="form-group">
                          <label>Telefono</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-phone-classic text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="telefono" id="telefono" class="form-control" placeholder="0000-0000" aria-label="0000-0000" aria-describedby="colored-addon2">
                          </div>
                        </div>
                      <div class="form-group">
                          <label>E-mail</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-email-plus text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="correo" id="correo" class="form-control" placeholder="example@gmail.com" aria-label="example@gmail.com" aria-describedby="colored-addon2">
                          </div>
                        </div>

                      <div class="form-group">
                          <label>Contraseña</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-account-key text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="pass" id="pass" class="form-control" placeholder="6-8 digitos" aria-label="6-8 digitos" aria-describedby="colored-addon2">
                          </div>
                        </div> 
                      <div class="form-group">
                      <label for="exampleFormControlSelect3">Tipo Usuario</label>
                       <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-folder-key text-white"></i>
                              </span>
                              <select class="form-control" id="exampleFormControlSelect3" name="id_tipo_usuario" aria-describedby="colored-addon2">
                                <option value="0">SELECCIONE UNA OPCION</option>
                                <?php 
                                 require_once "../../class/Tipo_usuario.php";
                         $NivelA = new Tipo_usuario();
                         $ListUsua = $NivelA->selectALL();
                         foreach ((array)$ListUsua as $row) {
                          echo '<option value="'.$row['id_tipo_usuario'].'">'.$row['nombre'].'</option>';
                         }
                                 ?>
                      </select>
                       </div>
                      
                    </div>
                          <input type="hidden" name="guardar" id="guardar" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>