<?php 
class conectar
{   
  /* coneçao com phpmyadmin (xampp)*/
	private $servidor="localhost";
    private $usuario="root";
    private $senha="";
    private $bd="calendario";
    public $con;
	
	function __construct()
	{
	  $this->conection();
	}
	public function conection(){
		$this->con=mysqli_connect($this->servidor,$this->usuario,$this->senha,$this->bd);
		
	}
	public function sentencia($sql){
	   return $result=mysqli_query($this->con,$sql);
       
	}
}
?>