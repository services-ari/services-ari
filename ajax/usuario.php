
<?php 
session_start();

require_once "../modelos/Usuario.php";

$usuario=new Usuario();

$logina=isset($_POST["logina"])? limpiarCadena($_POST["logina"]):"";
$clavea=isset($_POST["clavea"])? limpiarCadena($_POST["clavea"]):"";


switch ($_GET["op"]){
	

	case 'verificar':

		//HASH SHA256 EN LA CONTRASEÑA
		//$clavehash=hash("SHA256", $clavea);
		$rspta=$usuario->verificar($logina,$clavea);
		$fetch=$rspta->fetch_object();
		if(!empty($fetch))
		{

                //DECLARAMOS LAS VARIABLES DE SESIÓN
                $_SESSION['usuario']=$fetch->usuario;
                $_SESSION['clave']=$fetch->clave;
                $_SESSION['creditos']=$fetch->creditos;
                $_SESSION['fecha']=$fetch->fecha;
                $_SESSION['lives']=$fetch->lives;
                $_SESSION['deads']=$fetch->deads;

                

                echo $fetch->usuario;
            
		}else{
            echo null;
        }
      
		//echo $logina. " ".$clavehash;
		
	break;

	case 'salir':

		//limpiamos las variables de session
	session_unset();

		//destruimos la session
	session_destroy();
		//Redireccionamos al login
	header("Location: ../login.php");

	break;

}
?>