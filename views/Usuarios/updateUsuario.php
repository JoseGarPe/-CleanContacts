<form role="form" action="../controllers/UsuarioController.php?accion=modificar" method="post">
              <div class="box-body">
<?php 
require_once "../../class/Usuario.php";
       
              $codigo=$_POST["employee_id"];
               $usuario = new Usuario();
                         $dato = $usuario->selectOne($codigo);
                        
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
                            <input type="text"  name="nombres" id="nombres" value="'.$row['nombre'].'" class="form-control" placeholder=" Nombres" aria-label="Nombres.." aria-describedby="colored-addon2">
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
                            <input type="text"  name="tele_ofi" id="tele_ofi" value="'.$row['telefono'].'" class="form-control" placeholder="0000-0000" aria-label="0000-0000" aria-describedby="colored-addon2">
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
                   <div class="form-group">
                      <label for="exampleFormControlSelect3">Nivel Acceso</label>
                       <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent">
                                <i class="mdi mdi mdi-folder-key text-white"></i>
                              </span>
                              <select class="form-control" id="exampleFormControlSelect3" name="id_nivel" aria-describedby="colored-addon2">
                                <option value="0">SELECCIONE UNA OPCION</option>';
                              
                                 require_once "../../class/Tipo_Usuario.php";
                         $NivelA = new Tipo_usuario();
                         $ListUsua = $NivelA->selectALL();
                         foreach ((array)$ListUsua as $r) {
                          if ($row['id_tipo_usuario']==$r['id_tipo_usuario']) {
                            
                          echo '<option value="'.$r['id_tipo_usuario'].'" selected>'.$r['nombre'].'</option>';
                          }else{
                          echo '<option value="'.$r['id_tipo_usuario'].'">'.$r['nombre'].'</option>';
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