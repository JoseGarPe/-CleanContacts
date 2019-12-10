<?php 
require_once "config/conexion.php";
class Servicio extends conexion
{
private $id_servicio;
private $nombre;
private $descripcion;
private $precio;
private $id_categoria;
private $estado;

public function __construct()
{
	parent::__construct(); //Llamada al constructor de la clase padre conexion

        $this->id_servicio= "";
        $this->nombre = "";
        $this->descripcion = "";
        $this->precio = "";
        $this->id_categoria = "";
        $this->estado = "";

}

 	public function getId_servicio() {
        return $this->id_servicio;
    }

    public function setId_servicio($id) {
        $this->id_servicio = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }  
      public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }  
      public function getId_categoria() {
        return $this->id_categoria;
    }

    public function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    } 
      public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    } 

public function save()
    {
    	$query="INSERT INTO `servicio`(`id_servicio`, `nombre`, `descripcion`,`precio`,`id_categoria`,`estado`) VALUES(NULL,'".$this->nombre."','".$this->descripcion."','".$this->precio."','".$this->id_categoria."','".$this->estado."');";
    	$save=$this->db->query($query);
    	if ($save==true) {
            return true;
        }else {
            return false;
        }   
    }

     public function update()
    {
        $query="UPDATE servicio SET nombre='".$this->nombre."', descripcion='".$this->descripcion."',precio='".$this->precio."',id_categoria='".$this->id_categoria."' WHERE id_servicio='".$this->id_servicio."'";
        $update=$this->db->query($query);
        if ($update==true) {
            return true;
        }else {
            return false;
        }  
    }
    public function delete()
    {
       $query="DELETE FROM servicio WHERE id_servicio='".$this->id_servicio."'"; 
       $delete=$this->db->query($query);
       if ($delete == true) {
        return true;
       }else{
        return false;
       }

    }
     public function selectALL()
    {
        $query="SELECT s.*, c.nombre as categoria FROM servicio s INNER JOIN categoria c on c.id_categoria = s.id_categoria";
        $selectall=$this->db->query($query);
        $ListTipoUsuario=$selectall->fetch_all(MYSQLI_ASSOC);
        return $ListTipoUsuario;
    }
     public function selectOne($codigo)
    {
        $query="SELECT * FROM servicio WHERE id_servicio='".$codigo."'";
        $selectall=$this->db->query($query);
       $ListTipoUsuario=$selectall->fetch_all(MYSQLI_ASSOC);
        return $ListTipoUsuario;
    }

    


}
?>