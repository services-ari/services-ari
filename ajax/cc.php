
<?php 
session_start();

if(empty($_SESSION['usuario'])){
    header("Location: ../index.php");
}

require_once "../modelos/Usuario.php";

$usuario=new Usuario();

$logina=isset($_POST["logina"])? limpiarCadena($_POST["logina"]):"";
$clavea=isset($_POST["clavea"])? limpiarCadena($_POST["clavea"]):"";


switch ($_GET["op"]){
	

	case 'selectGates':

        $resp=$usuario->selectGates();
        $ret="";
        while($row=$resp->fetch_object()){
            $ret.='<tr>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input gate" type="checkbox" id="'.$row->nombre.'"  onclick="selectGate('.$row->id.",'".$row->nombre."'".')">
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </td>
            <td>'.$row->nombre.'</td>
            <td>'.$row->descripcion.'</td>
          </tr>';
        }

        echo $ret;
		
	break;

	case 'salir':



	break;

}
?>