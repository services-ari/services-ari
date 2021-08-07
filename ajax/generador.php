<?php 

session_start();
require_once "../modelos/Generador.php";

$Generador=new Generador();

$cc=isset($_POST["cc"])? limpiarCadena($_POST["cc"]):"";
$mes=isset($_POST["mes"])? limpiarCadena($_POST["mes"]):"";
$anio=isset($_POST["anio"])? limpiarCadena($_POST["anio"]):"";
$ccv=isset($_POST["ccv"])? limpiarCadena($_POST["ccv"]):"";
$clave=isset($_POST["clave"])? limpiarCadena($_POST["clave"]):"";
$tipo=isset($_POST["tipo"])? limpiarCadena($_POST["tipo"]):"";
$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";
$identificador=isset($_POST["identificador"])? limpiarCadena($_POST["identificador"]):"";
$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";
$gate=isset($_POST["gate"])? limpiarCadena($_POST["gate"]):"";






switch ($_GET["op"]){
	case 'gen':
		$Generador->insertar($cc,$mes,$anio,$ccv);
		echo "1";
	break;
	
	case 'update_test':
	
	$Generador->update_test($usuario,$identificador);
	echo "1";
	
	
	break;
	
	case 'update_test_stop':
	$usuario=$_SESSION['clave'];
	$identificador=$_SESSION['identificador'];

	$Generador->update_test_stop($usuario,$identificador);
	echo "1";
	break;
	
	
	
	case 'selectccserv':
	
	$usuario=$_SESSION['clave'];
	$identificador=$_SESSION['identificador'];

	$resp=$Generador->selectccserv($usuario,$identificador);
	
	$proceso="";
	$lives="";
	$dead="";

	
	
	while($row2=$resp->fetch_object()){
	
	if($row2->estado=="procesando" || $row2->estado=="test" ){
	 $proceso.=$row2->cc.'_';
	}
	
	if($row2->estado=="live"){
	 $lives.=$row2->cc.'_';
	}
	
	if($row2->estado=="dead"){
	  $dead.=$row2->cc.'_';
	}
		   
 }
	
	$return=array("proceso"=>$proceso,"lives"=>$lives,"dead"=>$dead);
		echo json_encode($return); 
	
	break;
	
	case 'update_test_estado':
	
	$Generador->update_test_estado($usuario,$identificador,$cc,$estado);
	echo "1";
	
	
	break;
	
	
	
	case 'estadocc':
	
	$resp=$Generador->estadocc($usuario,$identificador,$cc)->fetch_object();
	echo $resp->estado;
	
	
	break;
	
	case 'usurest':
	
	       $resp=$Generador->usuTest();
		
		
		$row=$resp->fetch_object();
		
		if(empty($row)){
		echo '0';
		}else{
		// `cc`, `usuario`, `identificador`, `estado`, `gate`
		$resp=$Generador->listarTodo($row->usuario);
		
		$cards="";
		$gate="";
		$identificador="";
		
		while($row2=$resp->fetch_object()){
		    $cards.=$row2->cc.'_';
		    $gate=$row2->gate;
		    $identificador=$row2->identificador;
		}
		
		$return=array("usuario"=>$row->usuario,"cc"=>$cards,"gate"=>$gate,"identificador"=>$identificador);
		
		echo json_encode($return);
		
		} 
	
	break;

	case 'insertTest':
		
		
		$cc=str_replace('\n',"_",$cc);
		$cc=str_replace(" ","",$cc);
		$string = $cc;

		$tags = explode('_' , $string);

		$usuario=$_SESSION['clave'];
		$identificador= rand(1000000000, 9999999999);
		$_SESSION['identificador']=$identificador;
		
		foreach($tags as $i =>$key) {
		
		$Generador->insertart_test($key,$usuario,$identificador,$estado,$gate);
		
		}
		
		
		echo "1";
	break;


	case 'login':
		$resp=$Generador->login($clave)->fetch_object();

		if(empty($resp)){
			echo "0";
		}else{
			echo json_encode($resp);
		}
	break;

	case 'estado':
		$resp=$Generador->estado()->fetch_object();

		if($resp->estado=="1" || $resp->estado==1){
			echo "1";
		}else{
			echo "0";
		}
	break;
	
		case 'kaptcha':
		$resp=$Generador->estado()->fetch_object();
		echo $resp->key_captche;
		
	break;
	
	case 'list_lives':
	    
		$resp=$Generador->list_lives($_GET['key']);
		
		$r="";
		while($row=$resp->fetch_object()){
		    $r.=$row->cc.'_';
		}
		
		echo $r;
		
	break;

	case 'proxy':
		$resp=$Generador->proxy()->fetch_object();
		if(!empty($resp)){
			echo $resp->list_protocol."://".$resp->list_ip.":".$resp->list_port;

		}else{
			echo "0";
		}


		
	break;
	
	case 'proxyUp':
	    
		$resp=$Generador->proxyUp($_GET['ip']);
		
	break;
	
	

	case 'cc':
		$resp=$Generador->insertarcc($clave,$cc,$tipo);
		echo $resp;
	break;



	
}
?>