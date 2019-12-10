<?php 

require_once "config/conexion.php";
class Contacto extends Conexion
{
 private $id_contacto;
 private $nombre;
 private $apellido;
 private $correo;
 private $telefono;
 private $id_empresa;

 public function __construct()
	{
		  parent::__construct(); //Llamada al constructor de la clase padre

        $this->id_contacto = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->correo="";
        $this->telefono="";
        $this->id_empresa="";
    }



	public function getId_contacto() {
        return $this->id_contacto;
    }

    public function setId_contacto($id) {
        $this->id_contacto = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
 
    
    
        public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getId_empresa() {
        return $this->id_empresa;
    }

    public function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }
   
 //---------------------Funciones----------------------------//
     public function save()
    {
        $anio_clienteword = hash('sha256', $this->anio_cliente);
    	$query="INSERT INTO contacto (id_contacto,nombre,apellido,correo,telefono,id_empresa)
    			values(NULL,'".$this->nombre."','".$this->apellido."','".$this->correo."','".$this->telefono."','".$this->id_empresa."');";
    	$save=$this->db->query($query);
    	if ($save==true) {
            return true;
        }else {
            
            return false;
        }   
    }
     public function update()
    {
        $query="UPDATE contacto SET nombre='".$this->nombre."',apellido='".$this->apellido."',correo='".$this->correo."', telefono='".$this->telefono."' WHERE id_contacto='".$this->id_contacto."'";
        $update=$this->db->query($query);
        if ($update==true) {
            return true;
        }else {
            return false;
        }  
    }

    public function delete()
    {
       $query="DELETE FROM contacto WHERE id_contacto='".$this->id_contacto."'"; 
       $delete=$this->db->query($query);
       if ($delete == true) {
        return true;
       }else{
        return false;
       }

    }
    public function selectALL($empresa)
    {
        $query="SELECT * FROM contacto WHERE id_empresa='".$empresa."'";
        $selectall=$this->db->query($query);
        $Listcontactos=$selectall->fetch_all(MYSQLI_ASSOC);
        return $Listcontactos;
    }
       
     public function selectOne($codigo)
    {
        $query="SELECT * FROM contacto WHERE id_contacto='".$codigo."'";
        $selectall=$this->db->query($query);
        $Listcontacto=$selectall->fetch_all(MYSQLI_ASSOC);
        return $Listcontacto;
    }
 }
?>