<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Generador
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($cc,$mes,$anio,$ccv)
	{
		$sql="INSERT INTO `olympus`( `cc`, `mes`, `anio`, `ccv`) 
		VALUES ( '$cc','$mes','$anio','$ccv')";
		return ejecutarConsulta($sql);
		
	}


	public function estadocc($usuario,$identificador,$cc)
	{
		$sql="SELECT estado from cc_test where usuario='$usuario' and identificador='$identificador' and cc='$cc'";
		
		return ejecutarConsulta($sql);
		
	}
	
	public function selectccserv($usuario,$identificador)
	{
		$sql="SELECT * from cc_test where usuario='$usuario' and identificador='$identificador'";
		
		return ejecutarConsulta($sql);
		
	}


	public function update_test($usuario,$identificador)
	{
		$sql="UPDATE cc_test  set estado='procesando' where usuario='$usuario' and identificador='$identificador'";
		return ejecutarConsulta($sql);
		
	}
	
	public function update_test_stop($usuario,$identificador)
	{
		$sql="UPDATE cc_test  set estado='detenido' where usuario='$usuario' and identificador='$identificador'";
		return ejecutarConsulta($sql);
		
	}
	
	public function update_test_estado($usuario,$identificador,$cc,$estado)
	{
		$sql="UPDATE cc_test  set estado='$estado' where usuario='$usuario' and identificador='$identificador' and cc='$cc'";
		return ejecutarConsulta($sql);
	}

	
	public function insertarcc($key,$cc,$tipo)
	{
	    
	    $cc = preg_replace('/[^A-Za-z0-9\-\|\:\「\」\(\)]/', '', $cc); // Removes special chars.
		$sql="INSERT INTO `$tipo`( `idkey`, `cc`) VALUES ('$key','$cc')"; 
		//die($sql);
		ejecutarConsulta($sql);	

      

		if($tipo=="lives"){
		    
		    if(substr($cc, -2)=="10"){
		        
		        	$sql2="UPDATE keys_chk SET creditos=creditos-5 where clave='$key'";
			return ejecutarConsulta($sql2);
		    }
		    elseif(substr($cc, -1)=="7"){
		        	$sql2="UPDATE keys_chk SET creditos=creditos-5 where clave='$key'";
			return ejecutarConsulta($sql2);
		    }
		    elseif(substr($cc, -1)=="8"){
		        	$sql2="UPDATE keys_chk SET creditos=creditos-5 where clave='$key'";
			return ejecutarConsulta($sql2);
		    }
		    elseif(substr($cc, -1)=="9"){
		        	$sql2="UPDATE keys_chk SET creditos=creditos-5 where clave='$key'";
			return ejecutarConsulta($sql2);
		    }
		     elseif(substr($cc, -1)=="5"){
		        	$sql2="UPDATE keys_chk SET creditos=creditos-5 where clave='$key'";
			return ejecutarConsulta($sql2);
		    }
		    else{
		        	$sql2="UPDATE keys_chk SET creditos=creditos-3 where clave='$key'";
			return ejecutarConsulta($sql2);
		    }
		    
		
		}
	}

	public function estado(){
		$sql="SELECT * FROM `config_ckh` WHERE id=1";
		return ejecutarConsulta($sql);	
	}
	
	
	public function usuTest(){
	
		$sql="SELECT distinct( usuario) from cc_test where estado='test'";
		return ejecutarConsulta($sql);	
	}
	
	
	
	public function insertart_test($cc,$usuario,$identificador,$estado,$gate){
		$sql="INSERT INTO `cc_test`( `cc`, `usuario`, `identificador`, `estado`,gate) VALUES ('$cc','$usuario','$identificador','$estado','$gate')";
		return ejecutarConsulta($sql);	
	}
	
	public function listarTodo($usuario){
	$sql="SELECT `cc`, `usuario`, `identificador`, `estado`, `gate` FROM `cc_test` WHERE usuario='$usuario' and estado='test'";
		return ejecutarConsulta($sql);	
	}
	
		public function list_lives($key){
		$sql="SELECT cc FROM `lives` WHERE idkey='$key' ORDER BY id desc limit 20";
		return ejecutarConsulta($sql);	
	}
	
	

	public function login($clave){
		$sql="SELECT * FROM `keys_chk` WHERE clave='$clave'";
		return ejecutarConsulta($sql);	
	}

	public function proxy(){
		$sql="SELECT list_ip,list_port,list_protocol FROM `proxy` WHERE (list_anonymity='' OR list_anonymity is null ) order by RAND() limit 1";
		return ejecutarConsulta($sql);	
	}
	
		public function proxyUp($ip){
		$sql="UPDATE proxy set list_anonymity='0' where list_ip='$ip'";
		return ejecutarConsulta($sql);	
	}
	
}

?>