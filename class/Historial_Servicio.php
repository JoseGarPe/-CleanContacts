<?php 
require_once "config/conexion.php";
class Historial_servicio extends conexion
{
private $id_historial_servicio;
private $id_contacto;
private $id_servicio;
private $fecha_realizado;
private $n_factura;

public function __construct()
{
	parent::__construct(); //Llamada al constructor de la clase padre conexion

        $this->id_historial_servicio= "";
        $this->id_contacto = "";
        $this->id_servicio = "";
        $this->fecha_realizado = "";
        $this->n_factura = "";

}

 	public function getId_historial_servicio() {
        return $this->id_historial_servicio;
    }

    public function setId_historial_servicio($id) {
        $this->id_historial_servicio = $id;
    }
    
    public function getId_contacto() {
        return $this->id_contacto;
    }

    public function setId_contacto($id_contacto) {
        $this->id_contacto = $id_contacto;
    }

    public function getId_servicio() {
        return $this->id_servicio;
    }

    public function setId_servicio($id_servicio) {
        $this->id_servicio = $id_servicio;
    }  
      public function getFecha_realizado() {
        return $this->fecha_realizado;
    }

    public function setFecha_realizado($fecha_realizado) {
        $this->fecha_realizado = $fecha_realizado;
    }  
      public function getN_factura() {
        return $this->n_factura;
    }

    public function setN_factura($n_factura) {
        $this->n_factura = $n_factura;
    } 

public function save()
    {
    	$query="INSERT INTO `historial_servicio`(`id_historial_servicio`, `id_contacto`, `id_servicio`,`fecha_realizado`,`n_factura`) VALUES(NULL,'".$this->id_contacto."','".$this->id_servicio."','".$this->fecha_realizado."','".$this->n_factura."');";
    	$save=$this->db->query($query);
    	if ($save==true) {
            return true;
        }else {
            return false;
        }   
    }

     public function update()
    {
        $query="UPDATE historial_servicio SET id_contacto='".$this->id_contacto."', id_servicio='".$this->id_servicio."',fecha_realizado='".$this->fecha_realizado."',n_factura='".$this->n_factura."' WHERE id_historial_servicio='".$this->id_historial_servicio."'";
        $update=$this->db->query($query);
        if ($update==true) {
            return true;
        }else {
            return false;
        }  
    }
    public function delete()
    {
       $query="DELETE FROM historial_servicio WHERE id_historial_servicio='".$this->id_historial_servicio."'"; 
       $delete=$this->db->query($query);
       if ($delete == true) {
        return true;
       }else{
        return false;
       }

    }
     public function selectALL()
    {
        $query="SELECT * FROM historial_servicio";
        $selectall=$this->db->query($query);
        $ListTipoUsuario=$selectall->fetch_all(MYSQLI_ASSOC);
        return $ListTipoUsuario;
    }
     public function selectOne($codigo)
    {
        $query="SELECT * FROM historial_servicio WHERE id_historial_servicio='".$codigo."'";
        $selectall=$this->db->query($query);
       $ListTipoUsuario=$selectall->fetch_all(MYSQLI_ASSOC);
        return $ListTipoUsuario;
    }

    


}
?>