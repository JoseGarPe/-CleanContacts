<form method="post" id="insert_form" action="../controllers/CategoriaController.php?accion=guardar">  
                        
                        <div class="form-group">
                          <label>Nombre Categoria</label>  
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
                          <label>Descripcion</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-card-text-outline text-white"></i>
                              </span>
                            </div>
                            <textarea name="descripcion" id="descripcion"></textarea>
                          </div>
                        </div> 
                      <br>
s
                          <input type="hidden" name="guardar" id="guardar" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>