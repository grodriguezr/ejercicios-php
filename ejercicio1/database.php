<?php
class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public $puntero; // sirve para apuntar a una fila luego de un select
	public $con_bda;
    public  $que_dba;
	public  $resultado;
    public $conexion;


    public function __construct(){
        $this->host     = 'localhostt';
        $this->db       = 'rhino';
        $this->user     = 'root';
        $this->password = 'rot';
        $this->charset  = 'utf8mb4';

        $this->conexion();
    }

    function conexion(){
        // Crear una nueva conexión
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->db);

        // Verificar errores de conexión
        if ($this->conexion->connect_errno) {
            die("Error al conectar: " . $this->conexion->connect_error);
        }

        // Establecer el conjunto de caracteres
        $this->conexion->set_charset($this->charset);

        // Establecer la zona horaria
        date_default_timezone_set("America/Bogota");

        // Devolver la conexión
        return $this->conexion;
    }


    public function ejecutar()
	{ //echo $this->que_dba;
		//exit();
		return $this->conexion->query($this->que_dba);
	}

	public function mensaje()
	{ 
		if($this->resultado==true){
			echo "Registro ";
		}else {
			
		echo "Error";
			
		}
	}


	public function asignar_valor()
	{

		foreach ($_REQUEST AS $atributo  => $valor) 
		{
		
		$this->$atributo=$valor;
		}
	}

	public function extraer_dato()
	{
		return $this->puntero->fetch_array(MYSQLI_ASSOC);
	}

}
?>