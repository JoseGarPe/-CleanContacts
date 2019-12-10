<form role="form" action="../controllers/ContactoController.php?accion=modificar" method="post">
              <div class="box-body">
<?php 
require_once "../../class/Contacto.php";
       
                         $codigo=$_POST["employee_id"];
                        $id_empresa = $_POST['employee_empresa'];
                        echo '<input type="hidden"  name="id_empresa" id="id_empresa" value="'.$id_empresa.'" class="form-control">';
               $Contacto = new Contacto();
                         $dato = $Contacto->selectOne($codigo);
                        
                      foreach ((array)$dato as $row) {
                        
                  echo ' 
                     <div class="form-group">
                  <label for="codigo">N°</label>
                  <input type="text" class="form-control" readonly value="'.$codigo.'" id="id" name="id">
                </div>
                             <div class="form-group">
                          <label>Nombres</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-account-box text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="nombre" id="nombre" value="'.$row['nombre'].'" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
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
                            <input type="text"  name="apellido" id="apellido" value="'.$row['apellido'].'" class="form-control" placeholder=" Apellidos" aria-label="Apellidos" aria-describedby="colored-addon2">
                          </div>
                        </div> 
                      <br>
                        <div class="form-group">
                          <label>Telefono Oficina</label>  
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-phone-classic text-white"></i>
                              </span>
                            </div>
                            <input type="text"  name="telefono" id="telefono" value="'.$row['telefono'].'" class="form-control" placeholder="0000-0000" aria-label="0000-0000" aria-describedby="colored-addon2">
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
                            <input type="text"  name="correo" id="correo" class="form-control" value="'.$row['correo'].'" placeholder="example@gmail.com" aria-label="example@gmail.com" aria-describedby="colored-addon2">
                          </div>
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