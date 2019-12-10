<?php 
require_once "config/conexion.php";
class Empresa extends conexion
{
private $id_empresa;
private $nombre;
private $direccion;
private $anios_cliente;
private $estado;

public function __construct()
{
	parent::__construct(); //Llamada al constructor de la clase padre conexion

        $this->id_empresa= "";
        $this->nombre = "";
        $this->direccion = "";
        $this->anios_cliente = "";
        $this->estado = "";

}

 	public function getId_empresa() {
        return $this->id_empresa;
    }

    public function setId_empresa($id) {
        $this->id_empresa = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }  
      public function getAnios_cliente() {
        return $this->anios_cliente;
    }

    public function setAnios_cliente($anios_cliente) {
        $this->anios_cliente = $anios_cliente;
    }  
      public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    } 

public function save()
    {
    	$query="INSERT INTO `empresa`(`id_empresa`, `nombre`, `direccion`,`anios_cliente`,`estado`) VALUES(NULL,'".$this->nombre."','".$this->direccion."','".$this->anios_cliente."','".$this->estado."');";
    	$save=$this->db->query($query);
    	if ($save==true) {
            return true;
        }else {
            return false;
        }   
    }

     public function update()
    {
        $query="UPDATE empresa SET nombre='".$this->nombre."', direccion='".$this->direccion."',anios_cliente='".$this->anios_cliente."',estado='".$this->estado."' WHERE id_empresa='".$this->id_empresa."'";
        $update=$this->db->query($query);
        if ($update==true) {
            return true;
        }else {
            return false;
        }  
    }
    public function delete()
    {
       $query="DELETE FROM empresa WHERE id_empresa='".$this->id_empresa."'"; 
       $delete=$this->db->query($query);
       if ($delete == true) {
        return true;
       }else{
        return false;
       }

    }
     public function selectALL()
    {
        $query="SELECT * FROM empresa";
        $selectall=$this->db->query($query);
        $ListTipoUsuario=$selectall->fetch_all(MYSQLI_ASSOC);
        return $ListTipoUsuario;
    }
     public function selectOne($codigo)
    {
        $query="SELECT * FROM empresa WHERE id_empresa='".$codigo."'";
        $selectall=$this->db->query($query);
       $ListTipoUsuario=$selectall->fetch_all(MYSQLI_ASSOC);
        return $ListTipoUsuario;
    }

    
     public function updateStatus()
    {
        $query="UPDATE empresa SET estado='".$this->estado."' WHERE id_empresa='".$this->id_empresa."'";
        $update=$this->db->query($query);
        if ($update==true) {
            return true;
        }else {
            return false;
        }  
    }


}
?>