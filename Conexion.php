<?php

class Conexion
{
	//Atributos
	private $host;
	private $user;
	private $pass;
	private $bd;

	public function __construct(){

		 $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->bd = "ejemplophp";

            $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->bd);
            if($this->con->connect_errno)
        {
            die ("database connection failed".$this->con->connect_errno);
        }
        mysqli_set_charset($this->con, "utf8");



	}

	public function consultaSimple($sql){
		 mysqli_query($this->con,$sql);

	}

	public function consultaRetorno($sql){
		$consulta = mysqli_query($this->con,$sql);
		
		return $consulta;
	}

}

?>