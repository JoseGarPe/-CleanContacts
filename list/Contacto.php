<?php 
  if (isset($_GET['id_empresa'])) {
    $id_empresa = $_GET['id_empresa'];

require_once "../class/Empresa.php";
       
               $Empresa = new Empresa();
                         $dato = $Empresa->selectOne($id_empresa);
                  foreach ($dato as $key) {
                  $nombre_empresa=$key['nombre'];
                  $direccion_empresa=$key['direccion'];
                  $estado_empresa=$key['estado'];
                  }

  }else{
    header('Location: Empresa.php?success=correcto');
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>CleanSv::Empresas</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->   
     <link href="../css/style.css" rel="stylesheet">
  <!--  <link rel="stylesheet" href="../assets/css/shared/style.css">-->

    <!-- You can change the theme colors from here -->
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">

    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />  
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.0/css/rowGroup.dataTables.min.css" />  
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <?php 
   require_once "menu.php";
     ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                         <input type="button" name="accion" value="Nuevo Empresa" id="accion" class="btn btn-success save_data"/> 
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                     <?php 
            if (isset($_GET['success'])) {
                
                if ($_GET['success']=='correcto') {
                    
                    echo '
              <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Correcto:</span>
                Los datos han sido guardados exitosamente.
           </div>
                    ';
                }
            }elseif (isset($_GET['error'])) {
           
               if ($_GET['error']=='incorrecto') {
                    
                    echo '
                <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Incorecto:</span>
              
                Error al guardar, verifique los datos ingresados.
            </div>
           
                    ';
                }
            }elseif (isset($_GET['seleccion'])) {
               if ($_GET['seleccion']=='nuevo') {
                    
                    echo '
                 <div class="alert alert-primary" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Atencion:</span>
              
                Ingrese todos los datos.
         </div>   
                    ';
                }
            }
             ?>
             <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <img src="../assets/images/users/user.PNG" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $nombre_empresa; ?></h4>
                                    <h6 class="card-subtitle"></h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Direccion</label>
                                        <div class="col-md-12">
                                          <?php 
                                          echo ' <input type="text" placeholder="Johnathan Doe" value="'.$direccion_empresa.'" class="form-control form-control-line">
';
                                           ?>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Estado</label>
                                        <div class="col-md-12">
                                          <?php 
                                          echo ' <input type="text" placeholder="johnathan@admin.com" value="'.$estado_empresa.'" class="form-control form-control-line" name="example-email" id="example-email">';
                                           ?>
                                      
                                        </div>
                                    </div>
                                      <div class="row">
                                             <div class="col-lg-8 col-md-offset-3"> </div>
                                          <div class="col-md-4 col-md-offset-3">
                                            <?php 
                                            echo '<input type="button" name="accion" value="Nuevo Contacto" id="accion" id_empresa="'.$id_empresa.'" class="btn btn-success save_data_user"/> </div>';
                                             ?>
                                          </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Contactos</label>
                                        <div class="col-sm-12">
                                        
                                            
                                            <table id="example3" class="table table-striped table-bordered">
                                               <thead>
                              <th>N°</th>      
                              <th>Nombre</th>
                              <th>Telefono</th>
                              <th>Correo</th>
                              <th>Opciones</th>
                                               </thead>
                                               <tbody>
                    <?php 
                        require_once "../class/Contacto.php";
                         $contac = new Contacto();
                         $ListUsua = $contac->selectALL($id_empresa);
                        
                           # code...
                         
                         foreach ((array)$ListUsua as $w) {
                         echo '
                          <tr>
                           <td>'.$w['id_contacto'].'</td>
                           <td>'.$w['nombre'].'</td>
                           <td>'.$w['telefono'].'</td>
                           <td>'.$w['correo'].'</td>
                           <td>';
                          
                           echo'
                                    
                                    
                                    <input type="button" name="edit" value="Editar" id="'.$w["id_contacto"].'" class="btn btn-warning edit_data" />
                                     <input type="button" name="delete" value="Eliminar" id="'.$w["id_contacto"].'" class="btn btn-danger delete_data" />
                           </td>
                          </tr>
                         ';
                       }
                     ?>
            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Empresas</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="example4" class="table table-striped table-bordered">
                                         <thead>
                      <th>N°</th>      
                      <th>Empresa</th>
                      <th>Direccion</th>
                      <th>estado</th>
                      <th>Opciones</th>
                  </thead>
                  <tbody>
                    <?php 
                        require_once "../class/Empresa.php";
                         $Empresas = new Empresa();
                         $ListUsua = $Empresas->selectALL();
                        
                           # code...
                         
                         foreach ((array)$ListUsua as $row) {
                         echo '
                          <tr>
                           <td>'.$row['id_empresa'].'</td>
                           <td>'.$row['nombre'].'</td>
                           <td>'.$row['direccion'].'</td>
                           <td>'.$row['estado'].'</td>
                           <td>';
                           if ($row['estado']=='Activo') {
                            echo '
                                     <input type="button" name="delete" value="Desactivar" id="'.$row["id_empresa"].'" estado="Inactivo" class="btn btn-secundary status_data" />';
                          }else{
                            echo '
                                     <input type="button" name="delete" value="Activar" id="'.$row["id_empresa"].'" estado="Activo" class="btn btn-success status_data" />';
                          }
                           echo'
                                    
                                    <a href="Contactos.php?id_empresa='.$row['id_empresa'].'" class="btn btn-info">Ver Mas detalles</a>
                                    <input type="button" name="edit" value="Editar" id="'.$row["id_empresa"].'" class="btn btn-warning edit_data" />
                                     <input type="button" name="delete" value="Eliminar" id="'.$row["id_empresa"].'" class="btn btn-danger delete_data" />
                           </td>
                          </tr>
                         ';
                       }
                     ?>
            </tbody>
        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2017 Monster Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


     <div id="dataModal3" class="modal fade">  
                                  <div class="modal-dialog">  
                                       <div class="modal-content">  
                                            <div class="modal-header">  
                                            </div>  
                                            <div class="modal-body" id="employee_forms3">  
                                            </div>  
                                            <div class="modal-footer">  
                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                                            </div>  
                                       </div>  
                                  </div>  
  </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ==============================================================     <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>-->

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
     <!-- plugins:js 
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.1.0/js/dataTables.rowGroup.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/fbd569b8768155c7a9a62568e66a64115887d7d0/dataTables.rowsGroup.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>-->

<script type="text/javascript">

   $(document).ready(function(){  
      $(document).on('click', '.save_data', function(){  
          var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"../views/Empresa/saveEmpresa.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_forms3').html(data);  
                          $('#dataModal3').modal('show');  
                     }  
                });  
           }   
      }); 
      $(document).on('click', '.delete_data', function(){  
          var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"../views/Empresa/deleleEmpresa.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_forms3').html(data);  
                          $('#dataModal3').modal('show');  
                     }  
                });  
           }   
      });
      $(document).on('click', '.edit_data', function(){  
          var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"../views/Empresa/updateEmpresa.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_forms3').html(data);  
                          $('#dataModal3').modal('show');  
                     }  
                });  
           }   
      });
      $(document).on('click', '.status_data', function(){  
          var employee_id = $(this).attr("id");
           var employee_status = $(this).attr("estado");   
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"../views/Empresa/statuEmpresa.php",  
                     method:"POST",  
                     data:{employee_id:employee_id,employee_status:employee_status},  
                     success:function(data){  
                          $('#employee_forms3').html(data);  
                          $('#dataModal3').modal('show');  
                     }  
                });  
           }   
      });


        $(document).on('click', '.save_data_user', function(){  
          var employee_id = $(this).attr("id");  
          var employee_empresa = $(this).attr("id_empresa");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"../views/Contacto/saveContacto.php",  
                     method:"POST",  
                     data:{employee_id:employee_id,employee_empresa:employee_empresa},  
                     success:function(data){  
                          $('#employee_forms3').html(data);  
                          $('#dataModal3').modal('show');  
                     }  
                });  
           }   
      }); 
});  

</script>
</script>
    <script>
  $(document).ready(function() {
    $('#example3').DataTable( {

      'order'       : [[0, "desc"]],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
        ]
    } );
   
    $('#example4').DataTable( {
        order: [[0, 'asc']],
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      responsive: true,
      'autoWidth'   : true,
       // rowsGroup:[0,14,3,2],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ]
       
    } );

} );
</script>
</body>

</html>
