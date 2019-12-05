<?php 

require_once "config/conexion.php";
class Csontacto extends Conexion
{
 private $id_contacto;
 private $nombre;
 private $apellido;
 private $correo;
 private $anio_cliente;
 private $direccion;
 private $estado;
 private $telefono;
 private $nombre_empresa;

 public function __construct()
	{
		  parent::__construct(); //Llamada al constructor de la clase padre

        $this->id_contacto = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->correo="";
        $this->anio_cliente="";
        $this->direccion="";
        $this->estado="";
        $this->telefono="";
        $this->nombre_empresa="";
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
    public function getanio_cliente() {
        return $this->correo;
    }

    public function setAnio_cliente($anio_cliente) {
        $this->anio_cliente = $anio_cliente;
    }
    public function getDireccion() {
        return $this->direccion;
    }

    public function setdireccion($direccion) {
        $this->direccion = $direccion;
    }
    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
        public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    public function getNombre_empresa() {
        return $this->nombre_empresa;
    }

    public function setNombre_empresa($nombre_empresa) {
        $this->nombre_empresa = $nombre_empresa;
    }
 //---------------------Funciones----------------------------//
     public function save()
    {
        $anio_clienteword = hash('sha256', $this->anio_cliente);
    	$query="INSERT INTO contacto (id_contacto,nombre,apellido,correo,anio_cliente,direccion,telefono,nombre_empresa)
    			values(NULL,'".$this->nombre."','".$this->apellido."','".$this->correo."','".$anio_clienteword."','".$this->direccion."','".$this->telefono."','".$this->nombre_empresa."');";
    	$save=$this->db->query($query);
    	if ($save==true) {
            return true;
        }else {
            
            return false;
        }   
    }
     public function update()
    {
        $query="UPDATE contacto SET nombre='".$this->nombre."',apellido='".$this->apellido."',correo='".$this->correo."',direccion='".$this->direccion."', telefono='".$this->telefono."',nombre_empresa='".$this->nombre_empresa."' WHERE id_contacto='".$this->id_contacto."'";
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
    public function selectALL()
    {
        $query="SELECT * FROM contacto";
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